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
        $admins = [
            [
                'name' => 'Stanislav Ginev',
                'email' => 'stanislav1940@abv.bg',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
                'role_id' => $adminRole->id
            ], [
                'name' => 'Krasimira Mitova',
                'email' => 'krasi@abv.bg',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
                'role_id' => $adminRole->id
            ],
            [
                'name' => 'Kaloqn Marinov',
                'email' => 'kaloyan@abv.bg',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
                'role_id' => $adminRole->id
            ]
        ];
        $admin = User::insert($admins);

        $users = [
            [
                'name' => 'Gabriela Marinova',
                'email' => 'gabi@gmail.com',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'role_id' => $userRole->id,
            ],
            [
                'name' => 'Georgi Petrov',
                'email' => 'pambos@gmail.com',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'role_id' => $userRole->id
            ],
            [
                'name' => 'Qna Marinova',
                'email' => 'qna@gmail.com',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'role_id' => $userRole->id
            ],
            [
                'name' => 'Daniela Ilieva',
                'email' => 'deni@gmail.com',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'role_id' => $userRole->id,
            ],
            [
                'name' => 'Dimitrina Mitova',
                'email' => 'dimi@gmail.com',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'role_id' => $userRole->id
            ],
            [
                'name' => 'Georgi Ivanov',
                'email' => 'gogo@gmail.com',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'role_id' => $userRole->id
            ]

        ];
        $user = User::insert($users);
    }
}
