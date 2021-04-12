<?php

namespace App\Http\Controllers;

use App\Models\familias;
use Illuminate\Http\Request;

class FamiliasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\familias  $familias
     * @return \Illuminate\Http\Response
     */
    public function show(familias $familias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\familias  $familias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, familias $familias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\familias  $familias
     * @return \Illuminate\Http\Response
     */
    public function destroy(familias $familias)
    {
        //
    }
}
