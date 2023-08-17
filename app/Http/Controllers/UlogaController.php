<?php

namespace App\Http\Controllers;

use App\Http\Resources\UlogaResource;
use App\Models\Uloga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UlogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uloge = Uloga::all();
        return UlogaResource::collection($uloge);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'naziv'=>'required|string|max:50',
                'film_id'=>'required',
                'glumac_id'=>'required',
            ]
        );

        if($validator->fails())
            return response()->json($validator->errors());

        $u = Uloga::create([
            'naziv'=>$request->naziv,
            'film_id'=>$request->film_id,
            'glumac_id'=>$request->glumac_id,
        ]);

        $u->save();
        return response()->json(['Nova uloga: ' => new UlogaResource($u)]);
    }

    public function show($id)
    {
        $u = Uloga::find($id);
        if ($u) {
            return new UlogaResource($u);
        }
        return response()->json('Trazena uloga ne postoji u bazi');
    }

    public function update($request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'naziv'=>'string|max:50',
                'film_id'=>'',
                'glumac_id'=>'',
            ]
        );

        $u = Uloga::find($id);

        if($u){
            $u->naziv=$request->naziv;
            $u->film_id=$request->film_id;
            $u->glumac_id=$request->glumac_id;

            $u->save();
            return response()->json(['Uspesno izmenjeno', new UlogaResource($u)]);
        }
        
        return response()->json('Trazena uloga ne postoji');
    }

    public function destroy($id)
    {
        $u = Uloga::find($id);
        if ($u) {
            $u->delete();
            return response()->json('Uloga je uspesno obrisana',new UlogaResource($u));
        }
        return response()->json('Trazena uloga ne postoji u bazi');
    }
}
