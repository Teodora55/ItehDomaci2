<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function reziser(){
        return $this->belongsTo(Reziser::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

}
