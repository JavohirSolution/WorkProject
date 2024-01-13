<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Warehouses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::find(1)->warehouses()->create([
            "howmany" => 12,
            'price' => 1500,
        ]);
        Material::find(2)->warehouses()->create([
            "howmany" => 200,
            'price' => 1600,
        ]);
        Material::find(3)->warehouses()->create([
            "howmany" => 40,
            'price' => 500,
        ]);
        Material::find(4)->warehouses()->create([
            "howmany" => 300,
            'price' => 550,
        ]);
        Material::find(5)->warehouses()->create([
            "howmany" => 500,
            'price' => 300,
        ]);
        Material::find(6)->warehouses()->create([
            "howmany" => 1000,
            'price' => 2000,
        ]);
    }
}
