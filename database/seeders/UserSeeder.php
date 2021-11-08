<?php

namespace Database\Seeders;

use App\Models\AdminModels\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(30)->create();
    }
}
