<?php

namespace Database\Seeders;

use App\Models\Explorer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExplorerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Explorer::factory()->count(50)->create();
    }
}
