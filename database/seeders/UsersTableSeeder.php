<?php

namespace Database\Seeders;

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
            // Nome será 'admin'
            'name' => 'admin',
            'email' => 'admin@sys.com', // senha123 encriptada
            'password' => bcrypt('senha123')
        ]);
        
    }
}