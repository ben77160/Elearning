<?php

use App\Category;
use App\Course;
use App\User;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course();
        $slugify = new Slugify();

        $course->title = "Les bases de Symfony 4";
        $course->subtitle = "Apprendre à créer un site avec Symfony 4";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non augue nunc. Cras leo elit, mattis nec lacinia at, convallis ac nunc. Vivamus euismod arcu et augue vehicula, nec rhoncus dui malesuada. Aliquam vitae dolor imperdiet, feugiat odio sed, semper nibh. Curabitur varius neque nulla, quis pharetra nisl convallis quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse tristique sodales velit nec interdum";
        $course->price = 19.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

        $course = new Course();
        $course->title = "Créer un site ecommerce avec wordpress";
        $course->subtitle = "Construire un site ecommerce complet avec wordpress";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non augue nunc. Cras leo elit, mattis nec lacinia at, convallis ac nunc. Vivamus euismod arcu et augue vehicula, nec rhoncus dui malesuada. Aliquam vitae dolor imperdiet, feugiat odio sed, semper nibh. Curabitur varius neque nulla, quis pharetra nisl convallis quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse tristique sodales velit nec interdum";
        $course->price = 14.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

        $course = new Course();
        $course->title = "Les bases de Laravel 7";
        $course->subtitle = "Créer une plateforme d'enseignement avec Laravel 7";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non augue nunc. Cras leo elit, mattis nec lacinia at, convallis ac nunc. Vivamus euismod arcu et augue vehicula, nec rhoncus dui malesuada. Aliquam vitae dolor imperdiet, feugiat odio sed, semper nibh. Curabitur varius neque nulla, quis pharetra nisl convallis quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse tristique sodales velit nec interdum";
        $course->price = 39.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();
    }
}
