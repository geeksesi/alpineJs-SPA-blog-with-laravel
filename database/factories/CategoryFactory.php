<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->jobTitle();
        return [
            "name" => $name,
            "thumbnail" =>
                "public/images/categories/" .
                $this->faker->image(
                    "public/storage/images/categories",
                    170,
                    220,
                    null,
                    false
                ),
        ];
    }
}
