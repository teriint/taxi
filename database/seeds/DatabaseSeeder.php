<?php

use Illuminate\Database\Seeder;

use App\Role;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(\RolesSeeder::class);
        $this->call(\VodSeeder::class);
    }
}
