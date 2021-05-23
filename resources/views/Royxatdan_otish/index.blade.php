@extends('layouts.app')

@section('content')

<form action="{{ route('Royxatdan_otish')}}" method="post">
    @csrf
<<<<<<< HEAD
    Ism: <input type="text" name="ism">
    Familya: <input type="text" name="familya">
    Sharif: <input type="text" name="o_ism">
    To'g'ilgan sana: <input type="date" name="tug_sana" id="tug_sana">
    Passport seriya: <input type="text" name="passport">
    Karta raqam: <input type="text" name="karta_raqam">
    kirish: <input type="button" value="ok" action="kirish">
=======
    name <input type="text" name="ism">
    email <input type="text" class="email">
    password: <input type="password" name="password" id="pass">
    kirish: <input type="button" value="ok" action="submit">
>>>>>>> 59679b661058623aa7e576928fa5cb8e7f2913e1
</form>
@endsection