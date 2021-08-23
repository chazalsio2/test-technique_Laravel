<?php

namespace Database\Factories;

use App\Models\ordinateur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ordinateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ordinateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'label'=>$this->faker->dayOfMonth(),
            'created-at' => now(),
            'remember_token' => Str::random(10)
        ];
    }
}
