@extends('layouts.app')

@section('content')

<form action="" method="post">
    @csrf
    name <input type="text" name="ism">
    email <input type="text" class="email">
    password: <input type="password" name="password" id="pass">
    kirish: <input type="text" class="submit" name="Ok" value="Ok">
</form>
@endsection