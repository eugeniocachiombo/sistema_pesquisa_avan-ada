<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\CidadaoNacional::factory(10)->create();

        //$this->call(CidadaoNcaionalSeeder::class);
    }
}
