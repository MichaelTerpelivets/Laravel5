<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'test',
            'email'=>'test@gmail.com',
            'password'=> bcrypt('password')
        ]);

        DB::table('admins')->insert([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> bcrypt('password')
        ]);
    }
}
