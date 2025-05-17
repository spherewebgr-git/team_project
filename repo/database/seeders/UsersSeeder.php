<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(env('APP_ENV') != 'production')
            {
                $password = Hash::make('@dmin!@#');


                    $users = [
                        [
                            'name'=>'administrator',
                            'email' =>'administrator@teamproject.com',
                            'remember_token'=>\Ramsey\Uuid\Uuid::uuid4(),
                            'email_verified_at'=>Carbon::now(),
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now(),
                            'password' => $password,
                        ],
                        [
                            'name'=>'Nick Jameson',
                            'email' =>'n.jameson@teamproject.com',
                            'remember_token'=>\Ramsey\Uuid\Uuid::uuid4(),
                            'email_verified_at'=>Carbon::now(),
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now(),
                            'password' => $password,
                        ]
                    ];


                User::insert($users);
            }
    }
}
