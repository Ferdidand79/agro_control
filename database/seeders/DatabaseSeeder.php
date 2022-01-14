<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('observaciones');
        Storage::makeDirectory('observaciones');

        $this->call(UserSeeder::class);

        $this->call(NivelSeeder::class);

        $this->call(UnidadSeeder::class);

        $this->call(PlagaSeeder::class);

        $this->call(ParametroSeeder::class);

        $this->call(PlantaSeeder::class);

        $this->call(MuestraSeeder::class);
    }
}
