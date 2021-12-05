<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {      
        return [
            'name' => 'clients',
            'email' => $this->faker->unique()->safeEmail(),
            'phone'=>'0507859778',
             'by'=>'facebook',
             'submissonMethod'=>'dropbox',
             'notes'=>'juest test',
             'userId'=>1
        ];
    }
}
