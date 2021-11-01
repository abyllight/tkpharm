<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCategoriesCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->getTitle(),
            'expand' => false,
            'products' => ProductsCollection::collection($this->products),
            'created_at' => $this->created_at->format('Y.m.d'),
            'updated_at' => $this->updated_at->format('Y.m.d')
        ];
    }
}
