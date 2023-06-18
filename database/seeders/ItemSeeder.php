<?php namespace Database\Seeders;

use App\Models\Shop\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::factory()
            ->count(200)
            ->create();
    }
}
