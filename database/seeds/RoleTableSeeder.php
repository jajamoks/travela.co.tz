<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $admin = new Role();
        $admin->name = 'Admin';
        $admin->description = 'An Admin';
        $admin->save();

        $agent = new Role();
        $agent->name = 'Agent';
        $agent->description = 'Agent';
        $agent->save();
    }
}
