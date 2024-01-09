<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class SeederPok extends Seeder
{
    public function run()
    {
        Pokemon::factory(10)->create();
    }
}