<?php

namespace App\Http\Controllers;

use App\Models\Bolim;
use Illuminate\Http\Request;

class BolimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $list=Bolim::all();
       return view('bolim.index', compact('list'));
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
     * @param  \App\Models\Bolim  $bolim
     * @return \Illuminate\Http\Response
     */
    public function show(Bolim $bolim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bolim  $bolim
     * @return \Illuminate\Http\Response
     */
    public function edit(Bolim $bolim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bolim  $bolim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bolim $bolim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bolim  $bolim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bolim $bolim)
    {
        //
    }
}
