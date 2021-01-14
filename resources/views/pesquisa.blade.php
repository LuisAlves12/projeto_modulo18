@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Pesquisa
@endsection
@section('conteudo')
<form method="post" action="{{route('pesquisa.show')}}">
    @csrf
<label for="pesquisa"><h3>Pesquisa</h3></label>
<input type="text" name="pesquisa">
<button type="submit">Enviar</button>
<br><br>
<style>
.wrapper{
  width:100%;
  padding-top: 20px;
  text-align:center;
}
.carousel{
  width:90%;
  margin:0px auto;
}
.slick-slide{
  margin:10px;
}
.slick-slide img{
  width:100%;
  border: 2px solid #fff;
}
</style>



<script type="text/javascript">
$(document).ready(function(){
  $('.carousel').slick({
  slidesToShow: 3,
  centerMode: true,
  });
});
</script>



<div class="wrapper">
<div class="carousel">
  <div><img src="{{asset('imagens/encomendas.jpg')}}"></div>
  <div><img src="{{asset('imagens/encomendas1.jpg')}}"></div>
  <div><img src="{{asset('imagens/encomendas2.jpg')}}"></div>
  <div><img src="{{asset('imagens/encomendas3.jpg')}}"></div>
  <div><img src="{{asset('imagens/encomendas4.jpg')}}"></div>
</div>
</div>
<br><br><br><br>
@endsection