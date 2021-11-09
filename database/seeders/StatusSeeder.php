<?php

namespace Database\Seeders;

use App\Models\AdminModels\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            "status" => "Pending"
        ]);
        Status::create([
            "status" => "On Process"
        ]);
        Status::create([
            "status" => "Ready To Delivery"
        ]);
        Status::create([
            "status" => "Completed"
        ]);
    }
}
