<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Material;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            USerSeedeer::class,
            ProductSeeder::class,
            MaterialSeeder::class,
            WarehousesSeeder::class,
            OrderSeeder::class
        ]);
    }
}
