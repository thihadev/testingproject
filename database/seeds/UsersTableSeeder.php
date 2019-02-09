<?php

use Illuminate\Database\Seeder;

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
    		[
    			'name' => 'SuperAdmin',
    			'email' => 'admin@gmail.com',
    			'role' => 1,
    			'password' => bcrypt('password'),
    			'created_at' => now(),
    			'updated_at' => now()
    		],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 2,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]
    	]);
    }
}
