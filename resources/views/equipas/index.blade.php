@extends('layout')
@section('titulo-pagina')
Jogadores_equipas
@endsection
@section('Titulo')
Equipas
@endsection
@section('conteudo')
<ul>
@foreach($equipas as $equipa)
<li>
<a href="{{route('equipas.show', ['id_equipa'=>$equipa->id_equipa])}}">
    <h4>{{$equipa->designacao}}</h4>
</a>
    {{$equipa->designacao_outra}}
</li>
@endforeach
</ul>
@endsection
