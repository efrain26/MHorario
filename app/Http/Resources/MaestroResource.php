<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MaestroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'clave' => $this->clave,
            'persona' => PersonaResource::make($this->whenLoaded('persona')),
            'especialidad' => EspecialidadResource::make($this->whenLoaded('especialidad'))
        ];
    }
}
