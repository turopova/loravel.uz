@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
            @foreach ($list as $ijara)
            <li>
                <a href="/ijara/{{ $ijara->id }}">
                    [ {{ $ijara->berish_vaqt'}}, {{ $ijara->olish_vaqt}}, {{ $ijara->kitob_id}}, {{ $ijara->foydalanuvchi_id}},  {{ $ijara->xodim_id}}]
                </a>
            </li>
            @endforeach
    </ul>

</div>

@endsection