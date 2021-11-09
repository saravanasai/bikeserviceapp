<?php

namespace Database\Factories\AdminModels;

use App\Models\AdminModels\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "email" => $this->faker->email,
            "phonenumber" => $this->faker->phoneNumber,
            "password" => Hash::make(1412),
            "booking_status" => 0
        ];
    }
}
