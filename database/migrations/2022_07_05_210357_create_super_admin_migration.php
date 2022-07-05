<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// Modelo de Usuario
use App\Models\User;
//Spatie
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateSuperAdminMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $role = Role::create(['name' => 'super-admin']);
        $user = User::create([
            "name" => "Admin",
            "email" => "admin@admin.intesal",
            'email_verified_at' => now(),
            'password' => '$2y$10$85MKjwlgIqiIERWk6eh7ieGVnhfStvBShH5U7BbDz6XPHg4LvdEOC',
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole($role);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('super_admin_migration');
    }
}
