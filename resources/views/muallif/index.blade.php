@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
            @foreach ($list as $muallif)
            <li>
                <a href="/muallif/{{ $muallif->id }}">
                    {{ $muallif->familya}} 
                    {{ $muallif->ism}}
                    {{ $muallif->o_ism}}
                    {{ $muallif->nomi}}       
                </a>
            </li>
            @endforeach
    </ul>

</div>

@endsection