@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Tarefas </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data Limite de Conclusão</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tarefas as $key => $t)
                                <tr>
                                    <th scope="row">{{ $t['id'] }}</th>
                                    <td>{{ $t['tarefa'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime($t['data_limite_conclusao'])) }}</td>
                                    <td><a href="{{ route('tarefa.edit', $t['id']) }}">Edit</a></td>
                                    <!--
                                    'id' => $t['id'], 'tarefa'=> $t['tarefa'], 'data_limite_conclusao' => $t['data_limite_conclusao']
                                    -->
                                </tr>
                            @endforeach
                        </tbody>
                      </table>

                      <br>

                      <div style="margin-left: 35%">
                        {{ $tarefas->links("pagination::bootstrap-4") }}
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection