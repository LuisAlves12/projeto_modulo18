@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Encomendas:
@endsection
@section('conteudo')

<form action="{{route('encomendas.update',['id_encomenda'=>$encomenda->id_encomenda])}}" method="post">
    @method('patch')
    @csrf 

Cliente: <input type="text" name="id_cliente" value="{{$encomenda->id_cliente}}"><br>
@if($errors->has('id_cliente'))
Deverá ter um nome correto<br>
@endif

Vendedor: <input type="text" name="id_vendedor" value="{{$encomenda->id_vendedor}}"><br>
@if($errors->has('id_vendedor'))
Deverá ter um nome correto<br>
@endif

Produto: <select name="id_produto">
    @foreach($produto as $produtos)
        <option value="{{$produtos->id_produto}}">@if(in_array($produtos->id_produto, $produtosEncomendas))selected @endif {{produtos->designacao}} <br>
    @endforeach
@if($errors->has('$id_produto'))
Deverá ter um nome correto<br>
@endif

Data: <input type="date" name="data" value="{{$encomenda->data}}"><br>
@if($errors->has('data'))
Deverá ter um nome correto<br>
@endif

Observações: <input type="text" name="observacoes" value="{{$encomenda->observacoes}}"><br>
@if($errors->has('observacoes'))
Deverá ter um nome correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection