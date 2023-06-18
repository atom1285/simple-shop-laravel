<?php namespace App\Http\Controllers\WebControllers\Shop;

use App\Http\Resources\Shop\ItemResource;
use App\Models\Shop\Item;
use Inertia\Inertia;

class CatalogController
{

    public function index()
    {
        return Inertia::render('Shop/Catalog', [
            'data' => ItemResource::collection(
                Item::with('brand', 'category')->simplePaginate(24)
            ),
        ]);
    }

}
