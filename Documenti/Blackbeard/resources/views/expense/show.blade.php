@extends('layouts.app')

@section('content')
			<h1>Visualizzo la spesa {{ $expense->id }}</h1>
			<a href="{{ URL::action('ExpenseController@index') }}" class="btn btn-primary pull-right">Ritorna alle tabella delle spese</a>
			<p>name: <span>{{ $expense->name }}</span></p>
            <p>date: <span>{{ $expense->date }}</span></p>
            <p>amount: <span>{{ $expense->amount }}</span></p>
            <p>decription: <span>{{ $expense->description }}</span></p>
            <p>Categoria: <span>{{ $expense->category->name }}</span></p>
            <a href="{{ URL::action('CommentoController@index') }}" class="btn btn-primary pull-right">Tabella dei commenti</a><br/>
            <br/><a href="{{ URL::action('CommentoController@create') }}" class="btn btn-primary pull-right">Aggiungi un commento</a>
            
@endsection