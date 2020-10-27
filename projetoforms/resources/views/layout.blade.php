<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="utf-8">
    <title>@yield('titulo-pagina')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  </head>
  <body>
    <h2>@yield('header')</h2>
    @yield('conteudo')
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
  </body>
</html>