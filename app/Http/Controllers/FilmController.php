<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return $films;
    }

    public function show($film_id)
    {
        $film = Film::find($film_id);
        if(is_null($film)){
            return response()->json('Data not found',404);
        }
        return response()->json($film);
    }



}
