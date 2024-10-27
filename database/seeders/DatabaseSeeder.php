<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Property;
use App\Models\Agent;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Property::factory(10)->create();
        Agent::factory(8)->create();

    }
}
