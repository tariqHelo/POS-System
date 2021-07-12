<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $answers = $this->faker->paragraph;
        $right_answer = $this->faker->randomElement(explode(' ', $answers));

        return [
        'title' => $this->faker->paragraph,
        'answers' => $answers,
        'right_answer' => $right_answer,
        'score' => $this->faker->randomElement([1,5,10,15,20]),
        'quiz_id' => Quiz::inRandomOrder()->limit(1)->first(['id']),
        ];
    }
}
