<?php

namespace Database\Seeders;

use App\Models\Localizacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Localizacion::factory()->count(10)->create();
    }
}
