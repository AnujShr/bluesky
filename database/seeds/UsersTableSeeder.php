<?php

use App\Role;
use App\User;
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
        $role[] = Role::query()->whereName('admin')->first();
        $role[] = Role::query()->whereName('realtor')->first();
        $users = [
            ['user_type' => 'admin',
                'name' => 'Anuj Shrestha',
                'email' => 'admin@bluesky.com',
                'password' => bcrypt('admin'),
                'email_verified_at' => \Carbon\Carbon::now()
            ],
            [
                'user_type' => 'realtors',
                'name' => 'Maria Williams',
                'email' => 'maria@bluesky.com',
                'password' => bcrypt('maira'),
                'email_verified_at' => \Carbon\Carbon::now()
            ]];
        $i = 0;
        foreach ($users as $user) {
            User::query()->create($user)->roles()->attach($role[$i]);
            $i++;
        }
    }
}
