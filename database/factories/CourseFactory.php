<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->sentence,
            'slug' => Str::slug($name),
            'free' => rand(0, 1),
            'difficulty' => ['beginner', 'intermediate', 'advance'][rand(0, 2)],
            'type' => ['theory', 'project', 'snippet'][rand(0, 2)],
        ];
    }
}
