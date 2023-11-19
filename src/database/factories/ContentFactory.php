<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Content;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->randomElement(['男性','女性']),
            'email' => $this->faker->email,
            'postcode' => $this->faker->postcode,
            'address' => $this->faker->address,
            'building' => $this->faker->city,
            'opinion' => $this->faker->text(10)
        ];
    }
}
