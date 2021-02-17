<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name'=> 'Velieko',
            'email'=> 'velieko@wonder.com',
            'phone'=> '085710032428',
            'role' => 'Admin',
            'password'=> Hash::make('12345')
            ]);
            \App\User::create([
                'name'=> 'admin1',
                'email'=> 'admin1@wonder.com',
                'phone'=> '0857100100100',
                'role' => 'Admin',
                'password'=> Hash::make('12345')
                ]);
                \App\User::create([
                    'name'=> 'user1',
                    'email'=> 'user1@wonder.com',
                    'phone'=> '0857100100200',
                    'role' => 'User',
                    'password'=> Hash::make('12345')
                    ]);
    
    }
}
