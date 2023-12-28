<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = file_get_contents(__DIR__ . '/categories.json');
        $categories = json_decode($categories, true);
        foreach ($categories as $category){
            $newCategory = new Category();

            $newCategory->name = $category['name'];

            $newCategory->save();
    }
}
}
