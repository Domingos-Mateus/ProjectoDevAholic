<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/main.css">

    <title>template!</title>

  </head>

  <body>
    
@include('sweetalert::alert')
@include('layouts2.navegation')
<br>
<br><br>
    
@yield('conteudo')


  </body>
</html>