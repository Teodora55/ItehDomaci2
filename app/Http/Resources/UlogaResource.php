<?php

namespace App\Http\Resources;

use App\Models\Film;
use App\Models\Glumac;
use Illuminate\Http\Resources\Json\JsonResource;

class UlogaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'naziv' => $this->resource->naziv,
            'glumac' => new GlumacResource(Glumac::find($this->resource->glumac_id)),
            'film' => new FilmResource(Film::find($this->resource->film_id))
        ];
    }
}
