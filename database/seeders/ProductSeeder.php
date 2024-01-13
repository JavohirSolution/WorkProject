<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => "Shim",
            'code' => "3423442234",
        ]);
        Product::create([
            'name' => "Ko'ylak",
            'code' => "7577556775",
        ]);
    }
}
