<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->words(5),
            'image_id' => $this->faker->numberBetween(Image::count()),
        ];
    }
}
