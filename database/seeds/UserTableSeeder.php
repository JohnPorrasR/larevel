<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class)->create([
            'username' => 'jporras',
            'email' => 'johnporrasr@gmail.com',
            'password' => bcrypt('43173356'),
            'role' => 'admin'
        ]);

        factory(App\User::class, 49)->create();
    }
}
