<?php

namespace App\Http\Controllers;

use App\Models\Ijara;
use Illuminate\Http\Request;

class IjaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Ijara::all();
       return view('ijara.index', compact('list'));
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
     * @param  \App\Models\Ijara  $ijara
     * @return \Illuminate\Http\Response
     */
    public function show(Ijara $ijara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ijara  $ijara
     * @return \Illuminate\Http\Response
     */
    public function edit(Ijara $ijara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ijara  $ijara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ijara $ijara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ijara  $ijara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ijara $ijara)
    {
        //
    }
}
