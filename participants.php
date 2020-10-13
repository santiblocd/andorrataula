<!DOCTYPE html>
<html lang="ca" class="participantes-page">
  <head>
    <meta charset="utf-8">
    <title>Andorra à Taula - Participants</title>
    <?php include "./template-parts/head.html" ?>
  </head>
  <body>

  <div class="hamburguer">
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
      </div>
  <div data-barba="wrapper">
    <header>
     
      <?php include "./template-parts/header.html" ?>
      <nav class="menu-lang">
          <li><a href="es">ES</a></li>
          <li><a href="fr">FR</a></li>
          <li><a href="andorra">CA</a></li>
        </nav>
      <div class="texto-presentacion">
        <h2 class="invitacion">Us hi esperem <br>amb la taula <br>parada i una <br>Inedit de Damm <br>ben fresca.</h2>
      </div>
    </header>
    <!-- define the wrapper and the container -->
     <div data-barba="container" data-barba-namespace="home">
         <a class="circletopo" href= "/andorra">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en família</span></h1>
          </div>
        </a>

        <?php include "./template-parts/participantes.html" ?>

      </div>
    </div>

    <?php include "./template-parts/footer.html" ?>
    
  </body>
</html>