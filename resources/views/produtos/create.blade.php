@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Produtos:
@endsection
@section('conteudo')

<form action="{{route('produtos.store')}}" method="post">
    @csrf 

Designacao: <input type="text" name="designacao" value="{{old('designacao')}}"><br>
@if($errors->has('designacao'))
Deverá ter um designacao correto<br>
@endif

Stock: <input type="text" name="stock" value="{{old('stock')}}"><br>
@if($errors->has('stock'))
Deverá ter um stock correto<br>
@endif

Preço: <input type="text" name="preco" value="{{old('preco')}}"><br>
@if($errors->has('preco'))
Deverá ter um Preço correto<br>
@endif

Observações: <input type="text" name="observacoes" value="{{old('observacoes')}}"><br>
@if($errors->has('observacoes'))
Deverá ter um stock correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection