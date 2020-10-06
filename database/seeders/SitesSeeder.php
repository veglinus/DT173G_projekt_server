<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            'name' => 'Vegohjälpen',
            'url' => 'https://vegohjalpen.se',
            'description' => 'En hemsida byggd på Wordpress för att hjälpa människor bli veganer.'
        ]);
        DB::table('sites')->insert([
            'name' => 'Receptia',
            'url' => 'https://linush.com/dt093g/moment4/index.php',
            'description' => 'Egenskapad CMS i PHP i formen av en receptsida.'
        ]);
        DB::table('sites')->insert([
            'name' => 'Dandelion Klub',
            'url' => 'http://studenter.miun.se/~lihv1800/dt163g/moment4/index.html',
            'description' => 'Statisk hemsida i HTML och CSS som ser ut som en webbutik för ett fiktivt aktivistföretag.'
        ]);
        DB::table('sites')->insert([
            'name' => 'linush',
            'url' => 'https://linush.com/',
            'description' => 'Gammal CV hemsida byggd på Wordpress. Egetskapat tema.'
        ]);
    }
}
