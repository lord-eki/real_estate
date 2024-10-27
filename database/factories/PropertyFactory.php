<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>fake()->title(),
            'type' => 'Residency',
            'bedrooms' => 5,
            'bathrooms' =>9,
            'size'=> 758494,
            'price' => 8900000,
            'address' => 'BOX 140-90100',
            'state' => 'Eastleigh',
            'zipcode' => 90100,
            'country' => 'Kenya',
            'agent' => fake()->name()
        ];
    }
}
