<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            
            [
                'name' => 'admin',
            ],
            [
                'name' => 'user',
            ],
        ]); 
        DB::table('states')->insert([
            
            [
                'name' => 'student',
            ],
            [
                'name' => 'veterans',
            ],
            [
                'name' => 'teacher',
            ],
        ]); 
        DB::table('users')->insert([
            
            [
                'name' => 'admin',
                'role_id' => 1,
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'mahfuz',
                'role_id' => 1,
                'username' => 'mahfuz',
                'email' => 'mahfuzul@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'user',
                'role_id' => 2,
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
            ],
        ]); 

        User::factory()->count(10)->create();
    }
}
