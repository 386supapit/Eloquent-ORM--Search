<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomType>
 */
class RoomTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['Standard', 'Deluxe', 'Suite']),
            'price' => $this->faker->randomFloat(2, 500, 5000),
            'description' => $this->faker->paragraph(),
            'capacity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
