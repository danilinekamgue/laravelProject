@extends('layouts.app')

@section('content')

            <h1>Tutti i commenti inseriti!</h1>
                
                <a href="{{ URL::action('ExpenseController@index') }}" class="btn btn-primary pull-right">Ritorna alle spese</a><br/>

                <br/><a href="{{ URL::action('CommentoController@create') }}" class="btn btn-primary pull-right">Aggiungi un commento</a>
               
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Commento</th>
                            <th>Nome</th>                           
                            <th colspan="2">Azioni</th>  
                                                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commentos as $e)
                            <tr class="table table-hover table-striped">
                                <td>{{ $e->id }}</td>
                                <td>{{ date('d/m/Y', strtotime($e->date)) }}</td>
                                <td>{{ $e->description }}</td>                   															
                                <td>{{ $e->name }}</td>                               
                                <td colspan="2">
                                    <a href="{{ URL::action('CommentoController@show', ['id' => $e->id]) }}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    
                                    <a href="{{ URL::action('CommentoController@edit', ['id' => $e->id]) }}">
                                        <i class="far fa-edit"></i>
                                    </a>                                    
                                    <a href="{{ URL::action('CommentoController@destroy', ['id' => $e->id]) }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>  
                                                                     
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

@endsection
