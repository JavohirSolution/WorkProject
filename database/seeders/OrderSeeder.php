<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::find(1)->orders()->create([
            'product_id' => 1,
            'material_id' => 1,
            'product_qty' => 30,
        ]);
        User::find(2)->orders()->create([
            'product_id' => 2,
            'material_id' => 1,
            'product_qty' => 40,
        ]);
    }
}
