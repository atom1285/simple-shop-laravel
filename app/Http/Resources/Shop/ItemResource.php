<?php namespace App\Http\Resources\Shop;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'barcode' => $this->barcode,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'count' => $this->count,
            'category' => $this->when($this->category, new CategoryResource($this->category)),
            'brand' => $this->when($this->brand, new BrandResource($this->brand)),
        ];
    }
}
