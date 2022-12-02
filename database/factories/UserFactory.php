<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'avatar'=>$this->faker->randomElement(["https://robohash.org/19ee31c665a14e139e0cfdd3448fd681?set=set4&bgset=&size=200x200","https://robohash.org/abfe6576a6edc9642d923ea9b2d3d9e6?set=set4&bgset=&size=200x200","https://robohash.org/097613a17f68de943813ce6bdd04ebe6?set=set4&bgset=&size=200x200"]),
            'age' => $this->faker->randomNumber(2, true),
            'bio' => $this->faker->sentence()
        ];
    }
}
