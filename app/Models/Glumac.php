<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glumac extends Model
{
    use HasFactory;

    public function uloga(){
        return $this->hasMany(Uloga::class);
    }

    protected $fillable = [
        'ime',
        'prezime'
    ];
}
