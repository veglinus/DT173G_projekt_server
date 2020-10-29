<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'name' => 'Munkegärdeskolan - Vikarie',
            'description' => 'Vikarierade som högstadielärare i flera olika ämnen, mest musik.',
            'startdate' => '2017-08-31',
            'enddate' => '2018-01-01'
        ]);
        DB::table('jobs')->insert([
            'name' => 'Frilans',
            'description' => 'Frilansar som ljustekniker vid andra liveshower. Driver enskild näringsverksamhet med F-skatt.',
            'startdate' => '2017-02-09',
            'enddate' => 'Nuvarande'
        ]);
        DB::table('jobs')->insert([
            'name' => 'Fängelset - Timanställd',
            'description' => 'Timanställd och jobbar som ljustekniker på liveshower.',
            'startdate' => '2018-10-22',
            'enddate' => 'Nuvarande'
        ]);
    }
}
