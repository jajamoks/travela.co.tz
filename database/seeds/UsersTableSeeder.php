<?php

use App\Role;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();
      $role_admin = Role::where('name', 'Admin')->first();
      $role_agent  = Role::where('name', 'Agent')->first();


      $admin = new User();
      $admin->city = 'Dar es salaam';
      $admin->name = 'Super Admin';
      $admin->number = '+255 123 456 789';
      $admin->email = 'admin@obtb.dit';
      $admin->password = bcrypt('qazwsx');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $agent = new User();
      $agent->city = 'Dar es salaam';
      $agent->name = 'Super Agent';
      $agent->number = '+255 987 654 321';
      $agent->email = 'agent@obtb.dit';
      $agent->password = bcrypt('qazwsx');
      $agent->save();
      $agent->roles()->attach($role_agent);
    }
}
