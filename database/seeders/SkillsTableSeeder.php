<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = file_get_contents(__DIR__ . '/skills.json');
        $skills = json_decode($skills, true);
        foreach ($skills as $skill){
            $newSkill = new Skill();

            $newSkill->name = $skill['name'];

            $newSkill->save();
    }
}
}
