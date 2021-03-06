<?php

namespace App\Http\Controllers;

use App\Models\Muallif;
use Illuminate\Http\Request;

class MuallifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Muallif::all();
       return view('muallif.index', compact('list'));
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
     * @param  \App\Models\Muallif  $muallif
     * @return \Illuminate\Http\Response
     */
    public function show(Muallif $muallif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muallif  $muallif
     * @return \Illuminate\Http\Response
     */
    public function edit(Muallif $muallif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muallif  $muallif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muallif $muallif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muallif  $muallif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muallif $muallif)
    {
        //
    }
}
