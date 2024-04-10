<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), 
            'parent_id' => $this->faker->numberBetween(1, 10),
            'content' => $this->faker->text,
            'likes' => $this->faker->numberBetween(0, 100),
            'dislikes' => $this->faker->numberBetween(0, 50),
            'created_at' => $this->faker->dateTimeBetween('2024-01-01', '2024-12-31'),
            'updated_at' => $this->faker->dateTimeBetween('2024-01-01', '2024-12-31'),
        ];
    }
}
