<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <style>
      body{
        background-color: #252429;
        color: #ffffff;
      }
      a{
        color:#ffffff;
      }
    </style>  
</head>
<body>
    <h1 style="text-align:center; color: #ffffff;">@yield('Titulo')</h1>
    @yield('conteudo')
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="{{route('procura.index')}}">Pesquisa</a>
      <a class="nav-item nav-link" href="{{route('equipas.index')}}">Equipas</a>
      <a class="nav-item nav-link" href="{{route('jogadores.index')}}">Jogadores</a>
    </div>
  </div>
</nav>
</body>
</html>