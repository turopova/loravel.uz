<?php

namespace App\Http\Controllers;

use App\Models\Kitob;
use Illuminate\Http\Request;

class KitobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Kitob::all();
        return view('kitob.index', compact('list'));
    }
    public function AddBooks(Request $r)
    {
        
      
                $aa=new Kitob();
                $aa->name=$r->name;
                $aa->nashriyot=$r->nashir;
                $aa->yil=$r->yil;
                $aa->kitob_soni=$r->son;
                $aa->bolim_id=$r->bolim;
                $aa->save();
    
               
    

        // return view('Royxatdan_otish.index');
        return redirect()->route('Royxatdan_otish');

      
        
    }
    
    public function ShowBookAdd()
    {
       
        $bolim=Bolim::all();
        return view('kitob.index2',compact('bolim'));
        
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
     * @param  \App\Models\Kitob  $kitob
     * @return \Illuminate\Http\Response
     */
    public function show(Kitob $kitob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kitob  $kitob
     * @return \Illuminate\Http\Response
     */
    public function edit(Kitob $kitob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kitob  $kitob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kitob $kitob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kitob  $kitob
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kitob $kitob)
    {
        //
    }
}
