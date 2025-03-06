@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Colegial</h1>

        <h3><strong>Mote:</strong> {{ $colegial->mote }}</h3>
        <h3><strong>Nombre:</strong> {{ $colegial->nombre }}</h3>
        <h3><strong>Procedencia:</strong> {{ $colegial->ubicacion }}</h3>

        <h3>Años en el mayor:</h3>
        <ul>
            @foreach($colegial->cursos as $curso)
                <li>{{ $curso->id }} | Hab: {{ $curso->pivot->habitacion }}</li>
            @endforeach
        </ul>
    </div>
@endsection
