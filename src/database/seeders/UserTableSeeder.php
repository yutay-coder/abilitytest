<?php

namespace Database\Seeders;

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
        $param = [
            'id' => 1,
            'name' => 'tony',
            'email' => 'tonymail',
            'password' => 'tonypass',
            'created_at' => '2018-04-19 03:14:07',
            'updated_at' => '2018-04-19 03:14:07'
        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => 2,
            'name' => 'hoge',
            'email' => 'hogemail',
            'password' => 'hogepass',
            'created_at' => '2018-04-19 03:14:07',
            'updated_at' => '2018-04-19 03:14:07'
        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => 3,
            'name' => 'test',
            'email' => 'testmail',
            'password' => 'testpass',
            'created_at' => '2018-04-19 03:14:07',
            'updated_at' => '2018-04-19 03:14:07'
        ];
        DB::table('users')->insert($param);
    }
}
