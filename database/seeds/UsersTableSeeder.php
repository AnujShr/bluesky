<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        $user = [
            'user_type' => 'admin',
            'name' => 'Anuj Shrestha',
            'email' => 'admin@bluesky.com',
            'password' => bcrypt('admin'),
            'email_verified_at' => \Carbon\Carbon::now()
        ];
        \App\User::query()->create($user);
    }
}
