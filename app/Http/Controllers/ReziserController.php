<?php

namespace App\Http\Controllers;

use App\Models\Reziser;
use Illuminate\Http\Request;
use App\Http\Resources\ReziserResource;
use App\Http\Resources\ReziserCollection;

class ReziserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reziseri = Reziser::all();
        return new ReziserCollection($reziseri);
    }

    public function show($reziser_id)
    {
        return new ReziserResource($reziser);
    }



}
