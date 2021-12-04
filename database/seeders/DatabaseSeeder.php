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
        \App\Models\User::factory(1)->create();
        \App\Models\Client::factory(1)->create();
        \App\Models\Project::factory(1)->create();
        \App\Models\Task::factory(1)->create();
        \App\Models\subTask::factory(1)->create();


    }
}
