<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juliana Mareco',
            'email' => 'julianamareco18@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Teste Testezin',
            'email' => 'testetestezin@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
