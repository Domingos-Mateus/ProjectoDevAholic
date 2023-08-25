<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

    <title>template!</title>

    <style>
      .banner-image{
        background-image: url(img/banner-image.jpg);
        background-size: cover;
      }
    </style>
  </head>
  <body>

    <!--navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a href="#" class="navbar-brand" class="dev-aholic">DevAholic</a>
      <button
      type="button"
      class="navbar-toggler"
      data-bs-target="#navbarNav"
      data-bs-toggle="collapse"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-lable="Toggle Navbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a href="/encarregado/listar_encarregado" class="nav-link text-white">Encarregados</a>
            
          </li>
          <li class="nav-item">
            <a href="/crianca/listar_crianca" class="nav-link text-white">Crianças</a>
          </li>
          
                    <!-- Button trigger modal -->
<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Entrar
</button></li>

        </ul>

      </div>
    </div>
  </nav>
<!--banner image-->
  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="text-white">DEVAHOLIC</h1>

    </div>
  </div>

<!--Main content Area-->
<div class="container my-5 d-grid gap-5">
  <div class="p-5 border">
    <p>Este site fala sobre como devemos proceder em termos médicos e não só.
      Como cuidar da nossa saúde, cuidar dos próximos de nós.
      E ainda marcar uma consulta com um médico.
    </p>

  </div>
  <div class="p-5 border">
    <p>Este site fala sobre como devemos proceder em termos médicos e não só.
      Como cuidar da nossa saúde, cuidar dos próximos de nós.
      E ainda marcar uma consulta com um médico.
    </p>

  </div>

  <div class="p-5 border">
    <p>Este site fala sobre como devemos proceder em termos médicos e não só.
      Como cuidar da nossa saúde, cuidar dos próximos de nós.
      E ainda marcar uma consulta com um médico.
    </p>

  </div>

  <div class="p-5 border">
    <p>Este site fala sobre como devemos proceder em termos médicos e não só.
      Como cuidar da nossa saúde, cuidar dos próximos de nós.
      E ainda marcar uma consulta com um médico.
    </p>

  </div>

  <div class="p-5 border">
    <p>Este site fala sobre como devemos proceder em termos médicos e não só.
      Como cuidar da nossa saúde, cuidar dos próximos de nós.
      E ainda marcar uma consulta com um médico.
    </p>

  </div>

</div>


</main><!-- End #main -->




<div class="container-fluid" id="container-rodape">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <p><h5 class="main-title">sistema desenvolvido por <a href="http://devaholic.ao">DevAholic</a></h5></p>
      </div>
    </div>
  </div>
</div>


<footer>
  <div id="contact-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
        </div>
      
        <div class="col-md-4 contact-box">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="col-md-4 contact-box"></div>
      </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      var nav=document.querySelector('nav');
      window.addEventListener('scroll', function(){
        if(window.pageYOffset > 100){
          nav.classList.add('bg-dark','shadow');
        }else{
          nav.classList.remove('bg-dark','shadow');
        }
      });
    </script>
  </body>
</html>