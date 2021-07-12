<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Track;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph,
            'status' => $this->faker->randomElement([0,1]),
            'link' => $this->faker->url,
            'track_id' => Track::inRandomOrder()->limit(1)->first(['id']),
        ];
    }
}
