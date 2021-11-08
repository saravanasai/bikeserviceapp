<?php

namespace Database\Factories\AdminModels;

use App\Models\AdminModels\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "booking_user" => rand(1, 15),
            "complaint" => $this->faker->text($maxNbChars = 75),
            "service_on_date" => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            "booking_status" => rand(1, 3),
        ];
    }
}
