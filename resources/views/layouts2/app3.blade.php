<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>template!</title>

  </head>

  <body>
    
@include('sweetalert::alert')

<br>
<br><br>
    
@yield('conteudo')

<br><br>
@include('layouts2.footer')
  </body>
</html>