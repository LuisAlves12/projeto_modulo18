@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')

<form action="{{route('encomendas.store')}}" method="post">
    @csrf 

Nome vendedor : <select name="id_vendedor" multiple="">
        @foreach($vendedor as $vendedores)
            <option value="{{$vendedores->id_vendedor}}">{{$vendedores->nome}}</option>
        @endforeach
    </select><br>
@if($errors->has('id_vendedor'))
Deverá ter um nome correto<br>
@endif

Nome Cliente: <select name="id_cliente" multiple="">
        @foreach($cliente as $clientes)
            <option value="{{$clientes->id_cliente}}">{{$clientes->nome}}</option>
        @endforeach
    </select><br>
@if($errors->has('id_cliente'))
Deverá ter um nome correto<br>
@endif

Data: <input type="date" name="data" value="{{old('data')}}"><br>
@if($errors->has('data'))
Deverá ter um nome correto<br>
@endif

Observacoes: <input type="text" name="observacoes" value="{{old('observacoes')}}"><br>
@if($errors->has('observacoes'))
Deverá ter um nome correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection