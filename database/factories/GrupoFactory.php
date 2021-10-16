<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grupo;

class GrupoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grupo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grupo' => $this->faker->sentence(),
            'id_area' => 1,
            'created_at' => ["2020-05-05 08:45:09"],
            'updated_at' => ["2021-10-13 15:09:37"],
        ];
    }
}
