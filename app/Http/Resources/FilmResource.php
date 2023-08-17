<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'film';
    public function toArray($request)
    {
        return [
            'naziv' => $this->resource->naziv,
            'zanr' => $this->resource->zanr
        ];
    }
}
