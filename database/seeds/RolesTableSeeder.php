<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role::truncate();
        $roles = [
            ['role_name' => 'admin'],
            ['role_name' => 'user']
        ];
        Role::insert($roles);

    }
}
