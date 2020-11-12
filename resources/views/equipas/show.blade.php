@extends('layout')
@section('titulo-pagina')
Jogadores_equipas
@endsection
@section('conteudo')
<ul>
ID Equipa: {{$equipa->id_equipa}}<br>
Designacaoo: {{$equipa->designacao}}<br>
Sigla: {{$equipa->designacao_outra}}<br>
Localidade: {{$equipa->localidade}}<br>
</ul>
@endsection