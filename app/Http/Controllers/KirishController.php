<?php

namespace App\Http\Controllers;

use App\Models\Kirish;
use Illuminate\Http\Request;

class KirishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kirish.index');
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
     * @param  \App\Models\Kirish  $kirish
     * @return \Illuminate\Http\Response
     */
    public function show(Kirish $kirish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kirish  $kirish
     * @return \Illuminate\Http\Response
     */
    public function edit(Kirish $kirish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kirish  $kirish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kirish $kirish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kirish  $kirish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kirish $kirish)
    {
        //
    }
}
