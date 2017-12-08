<?php

namespace App\Http\Controllers;

use App\Consequence;
use Illuminate\Http\Request;

class ConsequencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consequences = Consequence::all()->toArray();
        
        return response()->json([$consequences]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consequence  $consequence
     * @return \Illuminate\Http\Response
     */
    public function show(Consequence $consequence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consequence  $consequence
     * @return \Illuminate\Http\Response
     */
    public function edit(Consequence $consequence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consequence  $consequence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consequence $consequence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consequence  $consequence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consequence $consequence)
    {
        //
    }
}
