<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cuerda::class, 50)->create();
        factory(App\Viento::class, 50)->create();
        factory(App\Percucion::class, 50)->create();
    }
}
