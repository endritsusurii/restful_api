<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pagesat;

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
        $pagesat = new Pagesat;
        $pagesat->id_klientit = $request->id_klientit;
        $pagesat->data_pageses = $request->data_pageses;
        $pagesat->shuma = $request->shuma;
        $pagesat->save();

        return response()->json([
            "message" => "Pagesa u ruajt"
        ], 201);
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
    public function update(Request $request, $id)
    {
        
        if (Pagesat::where('id', $id)->exists()) {
            $pagesat = Pagesat::find($id);
            $pagesat->data_pageses = is_null($request->data_pageses) ? $pagesat->data_pageses : $request->data_pageses;
            $pagesat->shuma = is_null($request->shuma) ? $pagesat->shuma : $request->shuma;
            $pagesat->save();
    
            return response()->json([
                "message" => "Të dhënat u përditësuan me sukses"
            ], 200);
            } else {
            return response()->json([
                "message" => "Pagesa nuk u gjet"
            ], 404);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Pagesat::where('id', $id)->exists()) {
            $pagesat = Pagesat::find($id);
            $pagesat->delete();
    
            return response()->json([
              "message" => "Pagesa u fshi"
            ], 202);
          } else {
            return response()->json([
              "message" => "Pagesa nuk u gjet"
            ], 404);
        }
    }
}
