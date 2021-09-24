<?php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'continent' => $this->faker->state,
            'organizer' => $this->faker->company,
            'price' => $this->faker->numberBetween($min = 1, $max = 10000),
            'rating' => $this->faker->numberBetween($min = 1, $max = 5),
            'img' => $this->faker->imageUrl($width = 640, $height = 480),
            'description' => $this->faker->text($maxNbChars = 500),
        ];
    }
}
