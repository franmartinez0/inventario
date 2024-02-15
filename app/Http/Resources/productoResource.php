<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class productoResource extends JsonResource
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
            'codigo' => $this->codigo,
            'modelo' => $this->modelo,
            'fabricante' => $this->fabricante,
            'descripcion' => $this->descripcion,
            'imagen' => $this->imagen,
            'stock' => $this->stock,
            'estado' => $this->estado,
            'localizacion' => $this->localizacion_id
        ];
    }
}
