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
        //ユーザー初期
        DB::table('users')->insert([
            ['username' => 'あきら',
            'mail' => 'akira@gmail.com',
            'password' => bcrypt('akira000'),
            'bio' => '20歳です。']
        ]);
    }
}
