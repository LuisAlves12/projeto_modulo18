<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link href="{{asset('css/flag.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/vegas.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/vegas.js')}}"></script>
    <style>
      body{
        background-color: #252429;
        color: #ffffff;
      }
      a{
        color:#ffffff;
      }
      table,tr,td,th{
        color:#ffffff;
      }
    </style>  
</head>
<body>
    <h1 style="text-align:center; color: #ffffff;">@yield('Titulo')</h1>
    @yield('conteudo')
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="{{route('pagina.index')}}">Pagina Inicial</a>
      <a class="nav-item nav-link" href="{{route('pesquisa.index')}}">Pesquisa</a>
      <a class="nav-item nav-link" href="{{route('cliente.index')}}">Cliente</a>
      <a class="nav-item nav-link" href="{{route('encomendas.index')}}">Encomenda</a>
      <a class="nav-item nav-link" href="{{route('produtos.index')}}">Produtos</a>
      <a class="nav-item nav-link" href="{{route('vendedores.index')}}">Vendedores</a>
    </div>
  </div>
</nav>
</body>
</html>