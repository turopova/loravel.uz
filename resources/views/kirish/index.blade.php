@extends('layouts.app')

@section('content')

    <form action="{{ route('kirish') }}" method="post">
        @csrf
        Karta raqamingizni kiriting: <input type="text" name="karta">
    </form>

@endsection