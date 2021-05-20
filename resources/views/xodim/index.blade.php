@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
            @foreach ($list as $xodim)
            <li>
                <a href="/xodim/{{ $xodim->id }}">
                    {{ $xodim->ism }}
                    {{ $xodim->familya }}
                    {{ $xodim->0_ism }}
                    [ {{ $xodim->tug_sana }}, {{ $xodim->passport }} ]
                    {{ $xodim->rasm }}
                </a>
            </li>
            @endforeach
    </ul>

</div>

@endsection