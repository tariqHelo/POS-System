<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\User;
use App\Models\Course;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {      
            $userid = User::inRandomOrder()->limit(1)->first(['id']);
            $courseid = Course::inRandomOrder()->limit(1)->first(['id']);
            
           // dd($courseid);
           

            $photoable_id = $this->faker->randomElement([ $userid, $courseid ]);
            $photoable_type = $photoable_id == $userid ? 'App\Models\User' : 'App\Models\Course';

            return [
                'filename' =>
                $this->faker->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg',]),

                'photoable_id' => $photoable_id,
                'photoable_type' => $photoable_type,
            ];
        
    }
}
