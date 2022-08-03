<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'price' => '200,000',
            'category' => 'tv, mobile',
            'description' => $this->faker->paragraph(4)
        ];
    }
}
