<?php

namespace App\Http\Controllers;

use App\ClaimType;
use Illuminate\Http\Request;

class ClaimTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return response()->json(ClaimType::all(), 200);
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
        claimtype::create($request->all());
        return response()->json('Creado con exito', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClaimType  $claimType
     * @return \Illuminate\Http\Response
     */
    public function show(ClaimType $claimType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClaimType  $claimType
     * @return \Illuminate\Http\Response
     */
    public function edit(ClaimType $claimType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClaimType  $claimType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClaimType $claimType)
    {
        $claimType->update($request->all());
        return response()->json('Datos Actualizados', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClaimType  $claimType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClaimType $claimType)
    {
        //
    }
}
