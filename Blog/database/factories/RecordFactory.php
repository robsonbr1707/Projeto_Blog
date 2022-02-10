<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = ['animes', 'jogos', 'tecnologias'];

        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'image' => null,
            'post_category' => Arr::random($categories)
        ];
    }
}
