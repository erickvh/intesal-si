<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// Models
use App\Models\User;
use Spatie\Permission\Models\Permission;
// Request
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //Función para enviar los permisos generales a la vista principal de usuarios
    public function index()
    {
        $permissions = Permission::all();
        return view('users.index', compact('permissions'));
    }

    // Función para mostrar todos los usuarios registrados menos el super admin
	public function listar(Request $request)
	{
		$id = Auth::user()->id;
		$users = User::orderby('id', 'DESC')
			->with('permissions', 'roles')
			// ->whereDoesntHave('roles', function ($query) {
            //      return $query->where('name', 'like', 'super-admin%');
            // })
			// ->filter($request->search)
			->paginate(5);


		$permissions = Permission::all();

		return [
			'pagination' => [
				'total'         => $users->total(),
				'current_page'  => $users->currentPage(),
				'per_page'      => $users->perPage(),
				'last_page'     => $users->lastPage(),
				'from'          => $users->firstItem(),
				'to'            => $users->lastItem(),
			],
			'users' => $users,
			'permissions' => $permissions,

		];
	}

    //función para guardar un usuario nuevo dentro de la base de datos
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->permissions) {
            $user->giveToPermissions($request->permissions);
        }

        $user = User::with('permissions', 'roles')->findOrFail($user->id);
        return response()->json(['user' => $user]);
    }

   // función para mostrar un usuario con sus permisos y roles
    public function show($id)
    {
        $user = User::with('permissions', 'roles')->findOrFail($id);
        return response()->json(['user' => $user]);
    }

   // función para actualizar un usuario especifico con su id
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $payload = null;
        if ($request->password) {
            $payload = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
        } else {

            $payload = [
                'name' => $request->name,
                'email' => $request->email,
            ];
        }

        $user->update($payload);
        if ($request->permissions) {
            $user->giveToPermissions($request->permissions);
        }
        $user = User::with('permissions', 'roles')->findOrFail($user->id);
        return response()->json(['user' => $user]);
    }

    // eliminar un usuario con el id del usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        try {
            $user->delete();
            return response()->json(['user' => $user]);;
        } catch (\Throwable $th) {
            return $this->errorResponse("Imposibil de eliminat utilizatorul " . $user->name  . " din cauza rolului de manager", 500);
        }
    }
}
