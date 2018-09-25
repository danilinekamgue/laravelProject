@extends('layouts.app')

@section('content')
            <h1>Modifica la spesa</h1>
            <div class="row">
                <div class="col-lg-6">

                    <form action="{{ URL::action('ExpenseController@update', ['id' => $expense->id])}}" method="POST">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                        <div class="form-group">
                            <label for="exampleInputEmail1">Data</label>
                            <input type="date" name="date" class="form-control" placeholder="Data" />
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Valore</label>
                            <input type="number" name="amount" class="form-control" placeholder="Valore" value="{{ $expense->amount }}" />
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Descrizione</label>
                            <input type="text" name="description" class="form-control" placeholder="Descrizione" value="{{ $expense->description }}" />
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome</label>
                            <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $expense->name }}" />
                        </div>

                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option <?php echo $category->id == $expense->category_id ? 'selected' : '' ?> value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Aggiorna">
                    </form>

                </div>
            </div>
@endsection
