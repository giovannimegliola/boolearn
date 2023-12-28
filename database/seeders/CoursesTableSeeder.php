<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = file_get_contents(__DIR__ . '/courses.json');
        $courses = json_decode($courses, true);
        foreach ($courses as $course) {
            $newCourse = new Course();

            $newCourse->name = $course['name'];
            $newCourse->description = $course['description'];
            $newCourse->start_date = $course['start_date'];
            $newCourse->end_date = $course['end_date'];
            $newCourse->image = $course['image'];
            $newCourse->price = $course['price'];
            $newCourse->n_participants = $course['n_participants'];
            $newCourse->level = $course['level'];
            $newCourse->availability = $course['availability'];
            $newCourse->language = $course['language'];

            $newCourse->save();
        }
    }
}
