<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Project',
            'description'=>'juest Description',
            'totalPriceOfProject'=>'1000',
            'totalHoursOfProject'=>'1000',
            'state'=>'backlog',
            'clientId'=>'1',
            'userId'=>'1',
        ];
    }
}
