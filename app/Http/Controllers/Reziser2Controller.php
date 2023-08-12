<?php

namespace App\Http\Controllers;


use App\Models\Reziser;
use Illuminate\Http\Request;
use App\Http\Resources\ReziserResource;

class Reziser2Controller extends Controller
{

    public function show(Reziser $reziser)
    {
        return new ReziserResource($reziser);
    }

    public function index()
    {
        $i = 1;
        $reziseri = Reziser::all();
        return $reziseri;
    }

}
