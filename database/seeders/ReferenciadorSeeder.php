<?php

namespace Database\Seeders;

use App\Models\Referenciador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferenciadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Referenciador::factory(10)->create();
    }
}
