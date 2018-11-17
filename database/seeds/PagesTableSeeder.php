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
                'name' => 'About Us',
                'group' => 'pages'
            ],
            [
                'slug' => 'contact',
                'name' => 'Contact',
                'group' => 'pages'
            ],
            [
                'slug' => 'feedback',
                'name' => 'Feedback',
                'group' => 'pages'

            ],
            [
                'slug' => 'privacy-policy',
                'name' => 'Privacy Policy',
                'group' => 'help-center'

            ],
            [
                'slug' => 'faqs',
                'name' => 'FAQs',
                'group' => 'help-center'

            ],
            [
                'slug' => 'site-term-condition',
                'name' => 'Site Terms And Conditions',
                'group' => 'terms-and-condition'
            ],
            [
                'slug' => 'use-term-condition',
                'name' => 'Use Terms And Condition',
                'group' => 'terms-and-condition'
            ]
        ];
        foreach ($pages as $page) {
            Pages::query()->create($page);
        }
    }
}
