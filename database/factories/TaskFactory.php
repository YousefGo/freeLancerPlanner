<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Task',
            'description'=>'juest Description',
            'totalPriceOfTask'=>'1000',
            'totolHoursOfTask'=>'1500',
            'state'=>'backlog',
            'priority'=>'1',
            'projectId'=>'1',
        ];
    }
}
