<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reziser extends Model
{
    use HasFactory;

    public function films(){
        return $this->hasMany(Film::class);
    }

    protected $fillable = [
        'ime',
        'prezime'
    ];
}
