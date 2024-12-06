<?php

namespace Database\Seeders;

use App\Models\CAE;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CAESeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CAE::factory(10)->create();
    }
}
