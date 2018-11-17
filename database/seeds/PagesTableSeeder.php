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
                'group' => 'page'
            ],
            [
                'slug' => 'contact',
                'name' => 'Contact',
                'group' => 'page'
            ],
            [
                'slug' => 'feedback',
                'name' => 'Feedback',
                'group' => 'page'

            ],
            [
                'slug' => 'privacy-policy',
                'name' => 'Privacy Policy',
                'group' => 'privacy-terms'

            ],
            [
                'slug' => 'faqs',
                'name' => 'FAQs',
                'group' => 'privacy-terms'

            ],
            [
                'slug' => 'site-term-condition',
                'name' => 'Site Terms And Conditions',
                'group' => 'privacy-terms'
            ],
            [
                'slug' => 'use-term-condition',
                'name' => 'Use Terms And Condition',
                'group' => 'privacy-terms'
            ]
        ];
        foreach ($pages as $page) {
            Pages::query()->create($page);
        }
    }
}
