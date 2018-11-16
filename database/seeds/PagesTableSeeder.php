<?php

use App\Pages;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pages::query()->truncate();
        $pages = [
            [
                'slug' => 'about-us',
                'name' => 'About Us'
            ],
            [
                'slug' => 'contact',
                'name' => 'Contact'
            ],
            [
                'slug' => 'feedback',
                'name' => 'Feedback'

            ]
        ];
        foreach ($pages as $page) {
            Pages::create($page);
        }
    }
}
