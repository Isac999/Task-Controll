@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualizar Tarefa</div>

                <div class="card-body">
                    <form method="POST" action=" {{ route('tarefa.update', ['tarefa' => $tarefa->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tarefa</label>
                          <input type="text" class="form-control" placeholder="Digite a tarefa aqui" name="tarefa" value="{{ $tarefa->tarefa }}">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Data limite</label>
                          <input type="date" class="form-control" name="data_limite_conclusao" value="{{ $tarefa->data_limite_conclusao }}">
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