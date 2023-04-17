<?php

namespace Database\Factories;

use App\Models\company;
use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class employeeFactory extends Factory
{
    protected $model = employee::class;

    public function definition()
    {
        return [
            'Fname' => $this->faker->firstName(),
            'Lname' => $this->faker->lastName(),
            'company_id' => company::factory(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
