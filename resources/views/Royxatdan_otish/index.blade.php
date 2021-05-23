@extends('layouts.app')

@section('content')

<form action="{{ route('Royxatdan_otish')}}" method="post">
    @csrf
    name <input type="text" name="ism">
    email <input type="text" class="email">
    password: <input type="password" name="password" id="pass">
    kirish: <input type="button" value="ok" action="submit">
    <h1>Salom</h1>
</form>
@endsection