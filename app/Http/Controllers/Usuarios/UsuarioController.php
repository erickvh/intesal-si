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
	public function list(Request $request)
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

    //
    public function store(Request $request)
    {
        //
    }

   //
    public function show($id)
    {
        //
    }

   //
    public function update(Request $request, $id)
    {
        //
    }

    //
    public function destroy($id)
    {
        //
    }
}
