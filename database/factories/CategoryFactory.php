<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    protected $model = Category::class;
    public function definition()
    {
        $name = $this->faker->colorName();
        return [
            'name' => $name,
            // 'slug' => str::slug($name),
        ];
    }
}
