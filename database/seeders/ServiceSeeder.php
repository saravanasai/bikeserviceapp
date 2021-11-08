<?php

namespace Database\Seeders;

use App\Models\AdminModels\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::factory()->count(3)->create();
    }
}
