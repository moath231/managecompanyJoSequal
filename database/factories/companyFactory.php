<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\company;

class companyFactory extends Factory
{
    protected $model = company::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'logo'=>'https://picsum.photos/'.$this->faker->numberBetween(100, 200),
            'website'=>$this->faker->url(),
        ];
    }

}
