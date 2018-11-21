<?php

use App\Category;
use Illuminate\Database\Seeder;

class CateogriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Category::query()->truncate();
        $category = new Category();
        for ($i = 0; $i < 2; $i++) {
            $category->name = $faker->word;
            $category->slug = str_slug($category->name);
            $category->save();
            $category = new Category();
        }
    }
}
