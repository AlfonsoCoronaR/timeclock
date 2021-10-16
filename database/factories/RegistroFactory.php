<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Registro;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'entrada' => 'entrada',
            'comida' => 'comida',
            'comida_regreso' => 'comida_regreso',
            'salida' => 'salida',
            'vacaciones' => 'vacaciones',
            'enfermedad' => 'enfermedad',
            'id_usuario' => 1,
            'created_at' => ["2020-05-05 08:45:09"],
            'updated_at' => ["2021-10-13 15:09:37"],
        ];
    }
}
