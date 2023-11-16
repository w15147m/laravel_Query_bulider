<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'aga' => $this->faker->numberBetween(5, 18),
            'address' => $this->faker->address(),
            'password' => $this->faker->password(),
            'email' => $this->faker->email(),
        ];
    }
}
