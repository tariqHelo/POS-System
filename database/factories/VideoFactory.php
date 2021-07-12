<?php

namespace Database\Factories;

use App\Models\Video;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph,
            'link' => $this->faker->url,
            'course_id' => Course::inRandomOrder()->limit(1)->first(['id']),
        ];
    }
}
