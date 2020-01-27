<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('offices')->insert([
            'office_id' => str_random(10) ,
            'office_name' => 'なかよし就労支援センター',
            'category_id' => '1',
            'address'=>'福岡県福岡市中央区'
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
