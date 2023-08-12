<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReziserCollection extends JsonResource
{
    public static $wrap = 'reziser';
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
