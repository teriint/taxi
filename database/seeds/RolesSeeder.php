<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
       $klient = Role::create([
            'name' => 'Klient', 
            'slug' => 'klient',
            'permissions' => [
                'create-post' => true,
            ]
        ]);
        $disp = Role::create([
            'name' => 'Dispetcher', 
            'slug' => 'dispetcher',
            'permissions' => [
                'update-post' => true,
                'publish-post' => true,
            ]
        ]);
    }
}
