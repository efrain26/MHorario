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
            'semestre_id' => $this->semestres_id,
            'especialidad_id' => $this->especialidades_id

        ];
    }
}
