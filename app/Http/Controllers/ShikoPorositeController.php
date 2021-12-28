<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pagesat;
use App\Models\Produktet;

class ShikoPorositeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porosite = DB::table('porosites')
                ->join('klientets', 'id_klientit', '=', 'klientets.id')
                ->join('detajet_e_porosises', 'id_detajet_e_porosise', '=', 'detajet_e_porosises.id')
                ->select('porosites.*', 'klientets.*', 'detajet_e_porosises.*')
                ->get();
        return response()->json($porosite);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Pagesat::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produktet $produktet)
    {
        
        $produktet->update($request->all());

        return $produktet;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Produktet::where('id', $id)->exists()) {
            $produktet = Produktet::find($id);
            $produktet->delete();
    
            return response()->json([
              "message" => "Produkti u fshi"
            ], 202);
          } else {
            return response()->json([
              "message" => "Produkti nuk ugjet"
            ], 404);
        }
    }
}
