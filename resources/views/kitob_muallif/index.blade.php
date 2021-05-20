@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
            @foreach ($list as $kitob)
            <li>
                <a href="/kitob_muallif/{{ $kitob_muallif->id }}">
                    [ {{ $kitob_muallif->kitob_id}}, {{ $kitob_muallif->muallif_id}} ]
                </a>
            </li>
            @endforeach
    </ul>

</div>

@endsection