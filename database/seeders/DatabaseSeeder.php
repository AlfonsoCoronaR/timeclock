<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Grupo;
use App\Models\Notificacion;
use App\Models\Registro;
use App\Models\Status;
use App\Models\User;
use Database\Factories\StatusFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Status::factory(1)->create();
        Area::factory(1)->create();
        Grupo::factory(1)->create();
        User::factory(1)->create();
        Registro::factory(1)->create();
        Notificacion::factory(1)->create();
    }
}
