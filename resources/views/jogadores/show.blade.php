@extends('layout')
@section('titulo-pagina')
Jogadores_equipas
@endsection
@section('Titulo')
Jogador
@endsection
@section('conteudo')
<ul>
ID Jogador: {{$jogador->id_jogador}}<br>
Nome: {{$jogador->nome}}<br>
Nacionalidade: {{$jogador->nacionalidade}} <i class="{{strtolower($jogador->nacionalidade)}} flag"></i><br>

@if(isset ($jogador->equipas->designacao))
        Equipa: {{$jogador->equipas->designacao}}<br>
    @else
        <diV class="alert alert-danger" role="alert">
        Jogador sem equipa definida
        </div>
    @endif 

</ul>
@endsection