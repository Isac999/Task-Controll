@component('mail::message')
{{ $tarefa }}

Data limite de conclusão: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Clique aqui para ver a tarefa 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
