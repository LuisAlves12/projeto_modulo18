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

@if(isset($encomenda->clientes))
    Nome do cliente: {{$encomenda->clientes->nome}}<br>
@else
    <diV class="alert alert-danger" role="alert">
    Cliente sem encomenda
    </div>
@endif 

@if(count($encomenda->produtos)>0)
    @foreach($encomenda->produtos as $produto)   
        Nome da Produto: {{$produto->designacao}}<br>
    @endforeach
    @else
        <diV class="alert alert-danger" role="alert">
            Encomenda sem produto
        </div>
@endif 

@if(isset($encomenda->vendedores))
    Nome do vendedor: {{$encomenda->vendedores->nome}}<br>
@else
    <diV class="alert alert-danger" role="alert">
    Encomenda sem vendedor
    </div>
@endif 

Data: {{$encomenda->data}}<br>
Observações: {{$encomenda->observacoes}}
</ul>
<a href="{{route('encomendas.edit',['id_encomenda'=>$encomenda->id_encomenda])}}" class="btn btn-info" role="button">Editar Encomenda</a>
<a href="{{route('encomendas.deleted',['id_encomenda'=>$encomenda->id_encomenda])}}" class="btn btn-info" role="button">Eliminar Encomenda</a>

@endsection