<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Photo;
use App\Models\Course;
use App\Models\Track;
use App\Models\Video;
use App\Models\Quiz;
use App\Models\Question;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // User::factory(10)->create();
        Photo::factory(10)->create();
        //Course::factory(10)->create();
         //Track::factory(10)->create();
        // Video::factory(10)->create();
        // Quiz::factory(10)->create();
        //Question::factory(10)->create();
         
    }
}
