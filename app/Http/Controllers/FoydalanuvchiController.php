<?php

namespace App\Http\Controllers;

use App\Models\Foydalanuvchi;
use Illuminate\Http\Request;

class FoydalanuvchiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Foydalanuvchi::all();
        return view('foydalanuvchi.index', compact('list'));
        //return view("foydalanuvchi.index2");
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
     * @param  \App\Models\Foydalanuvchi  $foydalanuvchi
     * @return \Illuminate\Http\Response
     */
    public function show(Foydalanuvchi $foydalanuvchi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foydalanuvchi  $foydalanuvchi
     * @return \Illuminate\Http\Response
     */
    public function edit(Foydalanuvchi $foydalanuvchi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foydalanuvchi  $foydalanuvchi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foydalanuvchi $foydalanuvchi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foydalanuvchi  $foydalanuvchi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foydalanuvchi $foydalanuvchi)
    {
        //
    }
}
