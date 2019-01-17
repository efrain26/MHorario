<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MateriaResource extends JsonResource
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
            'nombre' => $this->nombre,
            'semestre' => $this->semestre,
            'hora_inicio' => $this->hora_inicio,
            'hora_final' => $this->hora_final,
            'especialidad' => EspecialidadResource::make($this->whenLoaded('especialidad'))
        ];
    }
}
