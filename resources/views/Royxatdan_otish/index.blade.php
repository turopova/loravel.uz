@extends('layouts.app')

@section('content')

    <div>
        <form action="{{ route('Royxatdan_otish') }}" method="post">
            @csrf
            Ism: <input type="text" name="ism" >
            Familya: <input type="text" name="familya" >
            Sharif: <input type="text" name="o_ism" >
            To'g'ilgan sana:<br> <input type="date" name="tug_sana" ><br>
            Passport seriya: <input type="text" name="passport">
            Karta raqam: <input type="text" name="karta_raqam">
            kirish: <input type="button" value="ok" action="#intro">
        </form>
    </div>

@endsection