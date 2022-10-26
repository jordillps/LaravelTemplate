<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'url' => $this->faker->url,
            'excerpt' => $this->faker->text,
            'iframe' => $this->faker->text,
            'body' => $this->faker->text,
            'published_at' => $this->faker->dateTime(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
