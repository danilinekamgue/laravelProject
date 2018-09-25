@extends('layouts.app')

@section('content')
            <h1>Aggiungi una nuova spesa</h1>
            <div class="row">
                <div class="col-lg-6">

                    <form action="{{ URL::action('ExpenseController@store') }}" method="POST">
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

                        <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="control-label">Valore</label>
                            <input type="number" name="amount" class="form-control" placeholder="Valore">
                            @if ($errors->has('amount'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('amount') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="control-label">Descrizione</label>
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

                        <div class="form-group">
                            <label for="category_id" class="control-label">Categoria</label>
							 <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                            
                        </div>

                        <input type="submit" class="btn btn-primary" value="Aggiungi">
                    </form>

@endsection