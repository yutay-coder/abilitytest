<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
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
            'category_id' => 1,
            'first_name' => '太郎',
            'last_name' => '山田',
            'gender' => 1,
            'email' => 'examplemail',
            'tell' => '01000000000',
            'address' => '東京都渋谷区渋谷二丁目',
            'building' => '渋谷マンション1号',
            'detail' => '届いた商品が注文と異なっていました。',
            'created_at' => '2018-04-19 03:14:07',
            'updated_at' => '2018-04-19 03:14:07'
        ];
        DB::table('contacts')->insert($param);
    }
}
