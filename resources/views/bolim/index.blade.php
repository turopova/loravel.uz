@extends('layouts.app')

@section('content')

<div class="container" >
    <ul>
        @foreach ($list as $bolim)
        <li>
            <a href="/bolim/{{ $bolim->id }}">
                {{ $bolim->name}}
            </a>
        </li>
        @endforeach
    </ul>
</div>

@endsection