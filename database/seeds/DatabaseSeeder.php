<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BussesTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
    }
}
