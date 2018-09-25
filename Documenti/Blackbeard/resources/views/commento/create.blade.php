@extends('layouts.app')

@section('content')
            <h1>Aggiungi un nuovo commento</h1>
            <div class="row">
                <div class="col-lg-6">

                    <form action="{{ URL::action('CommentoController@store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                        <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="control-label">Data</label>
                            <input type="date" name="date" class="form-control" placeholder="Data">
                            @if ($errors->has('date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="control-label">Commento</label>
                            <input type="text" name="description" class="form-control" placeholder="Descrizione">
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Nome</label>
                            <input type="text" name="name" class="form-control" placeholder="Nome">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <input type="submit" class="btn btn-primary" value="Aggiungi">
                    </form>

@endsection