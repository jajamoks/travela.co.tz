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
      $admin->city = 'localhost';
      $admin->name = 'Test Admin';
      $admin->number = 'Port 8080';
      $admin->email = 'admin@obtb.dit';
      $admin->password = bcrypt('qazwsx');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $agent = new User();
      $agent->city = 'localhost';
      $agent->name = 'Test Agent';
      $agent->number = 'Port 8080';
      $agent->email = 'agent@obtb.dit';
      $agent->password = bcrypt('qazwsx');
      $agent->save();
      $agent->roles()->attach($role_agent);

       // for ($i = 0; $i < 7; $i++) {
       //     $user = App\User::create([
       //         'name' => $faker->name,
       //         'email' => $faker->UserName .'@bts.me',
       //         'password' => bcrypt('qazwsx'),
       //     ]);
       //     $user->roles()->attach($role_agent);
       //     $user->save();
       // }
    }
}
