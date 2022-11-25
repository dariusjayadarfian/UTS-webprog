<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'publisher_id' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->sentence(random_int(1, 3)),
            'author' => $this->faker->title.' '.$this->faker->firstName,
            'year' => $this->faker->year,
            'synopsis' => $this->faker->paragraph(5),
            'image' => $this->faker->imageUrl
        ];
    }
}
