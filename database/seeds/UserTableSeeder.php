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
            'password' => bcrypt('s1st3m45'),
            'role' => 'admin'
        ]);

        factory(App\User::class, 49)->create();
    }
}
