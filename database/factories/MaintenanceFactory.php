<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenance>
 */
class MaintenanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'appointment_to' => $this->faker->date(),
            'observation' => $this->faker->word(),
            'vehicle_id' => $this->faker->numberBetween(3, 8),
        ];
    }
}
