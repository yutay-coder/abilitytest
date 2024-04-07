<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
            'content' => '商品の交換について',
            'created_at' => '2018-04-19 03:14:07',
            'updated_at' => '2018-04-19 03:14:07'
        ];
        DB::table('categories')->insert($param);
    }
}
