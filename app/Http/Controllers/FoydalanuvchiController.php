<?php

namespace App\Http\Controllers;

use App\Models\Bolim;
use App\Models\Foydalanuvchi;
use App\Models\Kitob;
use App\Models\Xodim;
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
        
    }

    public function FoydalanuvchiAdd()
    {
       
   
        return view('foydalanuvchi.index2');
        
    }

    public function AddFoydalanuvchi(Request $r)
    {
        if($file=$r->file('file')){
            $name=$file->getClientOriginalName();
            if($file->move('images',$name)){

                $aa=new Foydalanuvchi();
                $aa->ism=$r->ism;
                $aa->familya=$r->familiya;
                $aa->o_ism=$r->sharif;
                $aa->tug_sana=$r->sana;
                $aa->passport=$r->pass;
                $aa->karta_raqam=$r->karta_raqam;
                // return $aa->image;
                $aa->rasm=$name;

                $aa->save();
    
       

                // return redirect()->route('index.view');
            }
        }

        return redirect()->route('Royxatdan_otish');


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
        return view('home.index',compact('bolim'));
        
    }
    /*
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
    */

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
