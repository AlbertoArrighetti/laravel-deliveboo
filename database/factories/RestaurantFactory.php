<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'restaurant_name' => $this->faker->company,
            'address' => $this->faker->address,
            'image' => $this->faker->imageUrl(640, 480, 'food', true),
            'user_id' => \App\Models\User::factory()
        ];
    }
}
