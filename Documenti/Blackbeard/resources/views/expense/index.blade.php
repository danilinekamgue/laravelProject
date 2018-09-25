@extends('layouts.app')

@section('content')

            <h1>Tutte le spese inserite!</h1>
                @if(auth()->check() && auth()->user()->admin)
                <a href="{{ URL::action('ExpenseController@create') }}" class="btn btn-primary pull-right">Aggiungi</a>
                @endif
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Descrizione</th>
                            <th>Totale</th>                            
                            <th>Categoria</th> 
                            <th>Nome</th>                           
                            <th colspan="2">Azioni</th>  
                                                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $e)
                            <tr class="<?php echo strtolower($e->category->name) ?>">
                                <td>{{ $e->id }}</td>
                                <td>{{ date('d/m/Y', strtotime($e->date)) }}</td>
                                <td>{{ $e->description }}</td>                                
								<td>{{ number_format($e->amount, 2) }}€</td>																
                                <td>{{ $e->category->name }}</td>  
                                <td>{{ $e->name }}</td>                               
                                <td colspan="2">
                                    <a href="{{ URL::action('ExpenseController@show', ['id' => $e->id]) }}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a href="{{ URL::action('CommentoController@index', ['id' => $e->id]) }}">
                                        <i class="far fa-comments"></i>
                                    </a>
                                    @if(auth()->check() && auth()->user()->admin)
                                    <a href="{{ URL::action('ExpenseController@edit', ['id' => $e->id]) }}">
                                        <i class="far fa-edit"></i>
                                    </a>                                    
                                    <a href="{{ URL::action('ExpenseController@destroy', ['id' => $e->id]) }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>  
                                    @endif                                  
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

@endsection
