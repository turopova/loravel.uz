@extends('layouts.app')

@section('content')

    <form action="{{ route('kirish') }}" method="post">
        @csrf
        Karta raqamingizni kiriting: <input type="text" name="karta">
        <input type="button" value="ok" action="{{ route('Royxatdan_otish\index2') }}">
    </form>

@endsection