<?php

namespace App\Http\Controllers;

use App\Models\Royxat_Otish;
use Illuminate\Http\Request;

class RoyxatOtishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Royxatdan_otish.index');
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
     * @param  \App\Models\Royxat_Otish  $royxat_Otish
     * @return \Illuminate\Http\Response
     */
    public function show(Royxat_Otish $royxat_Otish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Royxat_Otish  $royxat_Otish
     * @return \Illuminate\Http\Response
     */
    public function edit(Royxat_Otish $royxat_Otish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Royxat_Otish  $royxat_Otish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Royxat_Otish $royxat_Otish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Royxat_Otish  $royxat_Otish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Royxat_Otish $royxat_Otish)
    {
        //
    }
}
