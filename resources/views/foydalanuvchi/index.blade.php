@extends('layouts.app')

@section('content')

<div class="container" >
    <ul>
        @foreach ($list as $foydalanuvchi)
        <li>
            <a href="/foydalanuvchi/{{ $foydalanuvchi->id }}">
                {{ $foydalanuvchi->ism}}
                {{ $foydalanuvchi->familya}}
                {{ $foydalanuvchi->o_ism}}
                [ {{ $foydalanuvchi->togilgan_sana}},  {{ $foydalanuvchi->passport}},    {{ $foydalanuvchi->karta_raqam}}]
            </a>
        </li>
        @endforeach
    </ul>
</div>

@endsection