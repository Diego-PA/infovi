<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Correo::class, 20)->create();

        factory(\App\Respuesta::class, 10)->states('alta')->create();
        factory(\App\Respuesta::class, 10)->states('media')->create();
        factory(\App\Respuesta::class, 10)->states('baja')->create();

    }
}
