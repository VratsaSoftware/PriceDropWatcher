<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $adminRole = Role::where('role_name', 'admin')->first();
        $userRole = Role::where('role_name', 'user')->first();
        $admin = User::create([
            'name' => 'Stanislav Ginev',
            'email' => 'stanislav1940@abv.bg',
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'role_id' =>$adminRole->id,
        ]);

        $admin = User::create([
            'name' => 'Krasimira Mitova',
            'email' => 'krasi@abv.bg',
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'role_id' =>$adminRole->id,
        ]);
        $admin = User::create([
            'name' => 'Kaloqn Marinov',
            'email' => 'kaloyan@abv.bg',
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'role_id' =>$adminRole->id,
        ]);
        $user = User::create([
            'name' => 'Gabriela Marinova',
            'email' => 'gabi@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' =>$userRole->id,
        ]);
        $user = User::create([
            'name' => 'Georgi Petrov',
            'email' => 'pambos@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' =>$userRole->id,
        ]);
        $user = User::create([
            'name' => 'Qna Marinova',
            'email' => 'qna@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' =>$userRole->id,
        ]);
        $user = User::create([
            'name' => 'Daniela Ilieva',
            'email' => 'deni@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' =>Str::random(10),
            'role_id' =>$userRole->id,
        ]);
        $user = User::create([
            'name' => 'Dimitrina Mitova',
            'email' => 'dimi@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' =>$userRole->id,
        ]);
        $user = User::create([
            'name' => 'Georgi Ivanov',
            'email' => 'gogo@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' =>$userRole->id,
        ]);

    }
}
