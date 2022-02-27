<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsCollection extends JsonResource
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
            'image' => $this->image,
            'link' => $this->link,
            'amount' => $this->amount,
            'measurement' => $this->getAmount(),
            'title' => $this->getTitle(),
            'subtitle' => $this->getSubtitle(),
            'description' => $this->getDescription(),
            'is_active' => $this->is_active,
            'created_at' => $this->created_at->format('Y.m.d'),
            'updated_at' => $this->updated_at->format('Y.m.d')
        ];
    }
}
