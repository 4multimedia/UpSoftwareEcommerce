<?php

namespace Upsoftware\Ecommerce\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->hash,
            'name' => $this->name,
            'route' => $this->route,
            'depths' => $this->depths,
            'breadcrumbs' => $this->breadcrumbs,
            'children' => CategoryResource::collection($this->children),
        ];
    }
}
