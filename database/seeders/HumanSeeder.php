<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Human; // Pastikan untuk mengimpor model Human

class HumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Human::factory(50)->create();
    }
}
