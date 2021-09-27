<?php

namespace Database\Factories;

use App\Models\Comment;
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
            "author_name" => $this->faker->title(),
            "text" => $this->faker->text(50),
            "post_id" => rand(1, 50),
            "author_thumbnail" =>
                "public/images/av/" .
                $this->faker->image(
                    "public/storage/images/av",
                    640,
                    480,
                    null,
                    false
                ),
        ];
    }
}
