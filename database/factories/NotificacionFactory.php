<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Notificacion;

class NotificacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notificacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'notificacion' => $this->faker->paragraph(),
            'id_usuario' => 1,
            'created_at' => ["2020-05-05 08:45:09"],
            'updated_at' => ["2021-10-13 15:09:37"],
        ];
    }
}
