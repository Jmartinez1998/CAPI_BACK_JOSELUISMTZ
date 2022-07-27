<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\user_domicilio;
use App\Models\User;

class user_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = user_domicilio::class;

    public function definition()
    {
        return [
            //'user_id' => $this->faker()->random_int(1,3),
            'user_id' => \App\Models\User::factory(),
            'domicilio' => $this->faker->streetAddress,
            'numero_exterior' => $this->faker->randomNumber(4),
            'colonia' => $this->faker->text,
            'CP' => $this->faker->randomNumber,
            'ciudad' => $this->faker->city,
            'fecha_nacimiento' => $this->faker->date('Y_m_d')
        ];
    }
}
