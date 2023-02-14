<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user' => $this->faker->userName,
            'password'=> $this->faker->password,
            'hoten'=>$this->faker->name,
            'email'=>$this->faker->email,
            'phone'=>$this->faker->phoneNumber,
            'level'=>$this->faker->boolean,
        ];
    }
}
