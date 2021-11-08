<?php

namespace Database\Factories\AdminModels;

use App\Models\AdminModels\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "service_name" => $this->faker->randomElement($array = array('General service', 'oil Change', 'Water Wash')),
            "service_description" => $this->faker->text($maxNbChars = 50),
            "service_delete_status" => 1
        ];
    }
}
