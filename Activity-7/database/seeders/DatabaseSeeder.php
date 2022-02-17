<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(studentsSeeder::class);
        $this->call(teachersSeeder::class);
        $this->call(assignmentsSeeder::class);
        $this->call(markssSeeder::class);
    }
}
