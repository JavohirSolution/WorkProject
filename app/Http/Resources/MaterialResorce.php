<?php

namespace App\Http\Resources;

use App\Models\Warehouses;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResorce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
           'name' => $this->name,
           'warehouses' => WarehousesResource::collection($this->warehouses),
        ];
    }
}
