<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('offices')->insert([
            'office_number' => rand(10),
            'office_name' => 'よかよかグループホーム',
            'category_id' => '4',
            'address' => '福岡県福岡市南区',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
