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

        \DB::table('users')->insert([
            [
                'name'=>"user1",
                'email'=>"user1@test.com",
                'password'=>bcrypt('123456')
            ],[
                'name'=>"user2",
                'email'=>"user2@test.com",
                'password'=>bcrypt('123456')
            ],[
                'name'=>"user3",
                'email'=>"user3@test.com",
                'password'=>bcrypt('123456')
            ],
        ]);
    }
}
