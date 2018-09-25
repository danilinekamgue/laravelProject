@extends('layouts.app')

@section('content')
            <h1>Modifica il commento</h1>
            <div class="row">
                <div class="col-lg-6">

                    <form action="{{ URL::action('CommentoController@update', ['id' => $commento->id])}}" method="POST">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                        <div class="form-group">
                            <label for="exampleInputEmail1">Data</label>
                            <input type="date" name="date" class="form-control" placeholder="Data" />
                            @if ($errors->has('date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Commento</label>
                            <input type="text" name="description" class="form-control" placeholder="Descrizione" value="{{ $commento->description }}" />
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome</label>
                            <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $commento->name }}" />
                        </div>

                        <input type="submit" class="btn btn-primary" value="Aggiorna">
                    </form>

                </div>
            </div>
@endsection
