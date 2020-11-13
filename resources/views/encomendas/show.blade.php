@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Encomendas:
@endsection
@section('conteudo')
<ul>
ID Encomenda: {{$encomenda->id_encomenda}}<br>

@if(isset($encomenda->cliente))
        Nome: {{$cliente->nome}}<br>
    @else
        <diV class="alert alert-danger" role="alert">
        Cliente sem encomenda
        </div>
    @endif 

ID Vendedor: {{$encomenda->id_vendedor}}<br>

Data: {{$encomenda->data}}<br>
Observações: {{$encomenda->observacoes}}
</ul>
@endsection