@extends('layouts.app')

@section('content')

<div class="container" >
    <ul>
        @foreach ($list as $foydalanuvchis)
        <li>
            <a href="/foydalanuvchi/{{ $foydalanuvchis->id }}">
                {{ $foydalanuvchis->ism}}
                {{ $foydalanuvchis->familya}}
                {{ $foydalanuvchis->o_ism}}
                [ {{ $foydalanuvchis->togilgan_sana}},  {{ $foydalanuvchis->passport}},    {{ $foydalanuvchis->karta_raqam}}]
            </a>
        </li>
        @endforeach
    </ul>
</div>

@endsection