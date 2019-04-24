<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BussesTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        // $this->call(TicketsTableSeeder::class);
    }
}
