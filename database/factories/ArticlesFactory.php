<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'intitule'=>$this->faker->sentence(3),
            'categorie'=>$this->faker->word(),
            'price'=>$this->faker->numberBetween(100,10000),
        ];
    }
}
