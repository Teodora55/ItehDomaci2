<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uloga extends Model
{
    use HasFactory;

    public function glumac(){
        return $this->belongsTo(Glumac::class);
    }

    public function film(){
        return $this->belongsTo(Film::class);
    }

    protected $fillable = [
        'naziv',
        'glumac_id',
        'film_id'
    ];

}
