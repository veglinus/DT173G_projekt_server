<?php

namespace Database\Seeders;

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
        $this->call([
            CoursesSeeder::class,
            SitesSeeder::class,
            JobsSeeder::class
        ]);
        // https://laravel.com/docs/8.x/seeding
        // \App\Models\User::factory(10)->create();
    }
}
