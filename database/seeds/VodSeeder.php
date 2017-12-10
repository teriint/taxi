<?php

use Illuminate\Database\Seeder;

use App\Role;

class VodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vod = Role::create([
            'name' => 'Voditel', 
            'slug' => 'voditel',
            'permissions' => [
                'update-ok-post' => true,
                'update-status-post' => true,
            ]
        ]);
    }
}
