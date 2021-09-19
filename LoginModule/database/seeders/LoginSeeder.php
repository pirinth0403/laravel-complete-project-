<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name' => 'Abc',//Str::random(10),
            'email' => 'Abc@gmail.com',//Str::random(10).'@gmail.com', 
	  'password' => Hash::make('test123'),            
	  'remember_token' => Str::random(10), ]); 

    //   User::create([
    //     'name' => ‘Abc',
    //     'email' => ‘Abc@gmail.com',
    //     'password' => Hash::make('password'),
    //     'remember_token' => Str::random(10),
    // ]);


    }
}
