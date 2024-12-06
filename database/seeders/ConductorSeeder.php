<?php

namespace Database\Seeders;

use App\Models\Conductor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConductorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conductor::factory(10)->create();
    }
}
