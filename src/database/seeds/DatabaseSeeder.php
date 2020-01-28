<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Category::class, 3)
            ->create()
            ->each(function ($category) {
                factory(\App\Office::class, 5)->create([
                    'category_id' => $category->id,
                ]);
            });;
    }
}
