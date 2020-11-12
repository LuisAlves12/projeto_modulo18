@extends('layout')
@section('titulo-pagina')
Jogadores_equipas
@endsection
@section('conteudo')
<ul>
@foreach($equipas as $equipa)
<li>
    <h4>{{$equipa->designacao}}</h4>
    {{$equipa->designacao_outra}}
</li>
@endforeach
</ul>
@endsection
