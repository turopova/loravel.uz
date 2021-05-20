@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
            @foreach ($list as $kitob)
            <li>
                <a href="/kitob/{{ $kitob->id }}">
                    {{ $kitob->name}}
                    {{ $kitob->nashriyot}}
                    [ {{ $kitob->yil}}, {{ $kitob->kitob_soni}},  {{ $kitob->bolim_id}}]
                </a>
            </li>
            @endforeach
    </ul>

</div>

@endsection