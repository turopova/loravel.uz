<?php

namespace App\Http\Controllers;

use App\Models\Xodim;
use Illuminate\Http\Request;

class XodimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Xodim::all();
        return view('xodim.index', compact('list'));
    }
    public function XodimAdd()
    {
       
   
        return view('home.xodim');
        
    }

    public function AddXodim(Request $r)
    {
        if($file=$r->file('file')){
            $name=$file->getClientOriginalName();
            if($file->move('images',$name)){

                $aa=new Xodim();
                $aa->ism=$r->ism;
                $aa->familya=$r->familiya;
                $aa->o_ism=$r->sharif;
                $aa->tug_sana=$r->sana;
                $aa->passport=$r->pass;
                // return $aa->image;
                $aa->rasm=$name;

                $aa->save();
    
       

                // return redirect()->route('index.view');
            }
        }

        return redirect()->route('Royxatdan_otish');


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
     * @param  \App\Models\Xodim  $xodim
     * @return \Illuminate\Http\Response
     */
    public function show(Xodim $xodim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Xodim  $xodim
     * @return \Illuminate\Http\Response
     */
    public function edit(Xodim $xodim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Xodim  $xodim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Xodim $xodim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Xodim  $xodim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xodim $xodim)
    {
        //
    }
}
