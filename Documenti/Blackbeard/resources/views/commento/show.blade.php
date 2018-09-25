@extends('layouts.app')

@section('content')
            <h1>Visualizzo la spesa {{ $commento->id }}</h1>
            <a href="{{ URL::action('CommentoController@index') }}" class="btn btn-primary pull-right">Ritorna alle tabella dei commenti</a>
            <p>date: <span>{{ $commento->date }}</span></p>
            <p>commento: <span>{{ $commento->description }}</span></p>
            <p>name: <span>{{ $commento->name }}</span></p>
            <p>Grazie per avere lasciato un commento!!</p>
@endsection