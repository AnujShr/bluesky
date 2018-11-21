<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::query()->truncate();
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator/Web Master';
        $role->save();

        $role = new Role();
        $role->name = 'realtor';
        $role->description = 'Realtor';
        $role->save();
    }
}
