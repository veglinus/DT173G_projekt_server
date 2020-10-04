<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'id' => 'DT003G',
            'name' => 'Databaser',
            'progression' => 'A',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=21595'
        ]);
        DB::table('courses')->insert([
            'id' => 'DT057G',
            'name' => 'Webbutveckling I',
            'progression' => 'A',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=22782'
        ]);
        DB::table('courses')->insert([
            'id' => 'DT084G',
            'name' => 'Introduktion till programmering med JavaScript',
            'progression' => 'A',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=23932'
        ]);
        DB::table('courses')->insert([
            'id' => 'DT093G',
            'name' => 'Webbutveckling II',
            'progression' => 'B',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=22326'
        ]);
        DB::table('courses')->insert([
            'id' => 'DT152G',
            'name' => 'Webbdesign för CMS',
            'progression' => 'B',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=22324'
        ]);
        DB::table('courses')->insert([
            'id' => 'DT162G',
            'name' => 'JavaScript-baserad webbutveckling',
            'progression' => 'B',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=24366'
        ]);
        DB::table('courses')->insert([
            'id' => 'DT163G',
            'name' => 'Digital bildbehandling för webb',
            'progression' => 'A',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=24403'
        ]);
        DB::table('courses')->insert([
            'id' => 'DT173G',
            'name' => 'Webbutveckling III',
            'progression' => 'B',
            'syllabus' => 'https://www.miun.se/utbildning/kurser/Sok-kursplan/kursplan/?kursplanid=21873'
        ]);
        DB::table('courses')->insert([
            'id' => 'GD008G',
            'name' => 'Typografi och form för webb',
            'progression' => 'A',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=24399'
        ]);
        DB::table('courses')->insert([
            'id' => 'IK060G',
            'name' => 'Projektledning',
            'progression' => 'B',
            'syllabus' => 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=18594'
        ]);
    }
}
