<?php

namespace Database\Seeders;

use App\Models\Shop\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        Brand::factory()
            ->count(40)
            ->create();
    }
}
