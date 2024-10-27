<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'agency' => fake()->company(),
            'email' => fake()->unique()->safeEmail(),
            'contact' => '07657483727',
            'address' => 'PO BOX 758 , MACHAKOS',
        ];
    }
}
