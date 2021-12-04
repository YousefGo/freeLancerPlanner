<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'subTask',
            'description'=>'juest Description',
            'price'=>'1000',
            'hours'=>'1500',
            'state'=>'backlog',
            'priority'=>'1',
            'taskId'=>'1',
        ];
    }
}
