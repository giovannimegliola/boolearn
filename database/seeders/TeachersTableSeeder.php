<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = file_get_contents(__DIR__ . '/teachers.json');
        $teachers = json_decode($teachers, true);

        foreach ($teachers as $key => $teacher) {
            $newTeacher = new Teacher();
            $newTeacher->name = $teacher['name'];
            $newTeacher->surname = $teacher['surname'];
            $newTeacher->image = $teacher['image'];
            $newTeacher->email = $teacher['email'];
            $newTeacher->save();
        }
    }
}
