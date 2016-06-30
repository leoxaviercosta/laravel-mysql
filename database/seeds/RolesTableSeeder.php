<?php

use Illuminate\Database\Seeder;
use Modules\User;
use Modules\Authority\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // !!! All existing roles are deleted !!!
        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();

        $user = User::where('email', 'admin@localhost.com')->firstOrFail();
        $roleAdmin = Role::create(['name' => 'admin']);

        $user->roles()->attach($roleAdmin->id);
    }
}
