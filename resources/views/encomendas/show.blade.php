@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Resultado da pesquisa:
@endsection
@section('conteudo')
<ul>
ID Encomenda: {{$encomenda->id_encomenda}}<br>
ID Cliente: {{$encomenda->id_cliente}}<br>
ID Vendedor: {{$encomenda->id_vendedor}}<br>
Data: {{$encomenda->data}}<br>
Observações: {{$encomenda->observacoes}}
</ul>
@endsection