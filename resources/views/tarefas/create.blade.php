@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Tarefa</div>

                <div class="card-body">
                    <form method="POST" action=" {{ route('tarefa.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tarefa</label>
                          <input type="text" class="form-control" placeholder="Digite a tarefa aqui">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Data limite</label>
                          <input type="date" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection