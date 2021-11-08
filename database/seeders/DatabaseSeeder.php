<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([AdminLoginSeeder::class]);
        $this->call([RolesSeeder::class]);
        $this->call([StaffSeeder::class]);
        $this->call([statusSeeder::class]);
        $this->call([ProjectsSeeder::class]);
        $this->call([SkillSeeder::class]);
    }
}
