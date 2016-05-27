<?php

namespace Mrzeta\Admin\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Mrzeta\Admin\Entities\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::truncate();

        $categories = [
            'General',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
