<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'  => '1',
            'name'     => 'Nikica',
            'username' => 'Nino',
            'email'    => 'niktitanik81@gmail.com',
            'password' => bcrypt('test12345')
        ]);

        DB::table('users')->insert([
            'role_id'  => '2',
            'name'     => 'Ivana',
            'username' => 'Ivekica',
            'email'    => 'ivana@mail.com',
            'password' => bcrypt('test12345')
        ]);
    }
}
