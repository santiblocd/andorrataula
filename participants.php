<!DOCTYPE html>
<html lang="ca" class="participantes-page">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020 - Participants</title>
    <?php include "./template-parts/head.html" ?>
    <meta name="description" content="Restaurants de tota Andorra presenten les seves propostes de menús gastronòmics i tradicionals per a aquesta edició d’Andorra a Taula 2020."/>
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
          <li><a href="es/participantes.php">ES</a></li>
          <li><a href="fr/participants.php">FR</a></li>
          <li><a href="#">CA</a></li>
        </nav>
      <div class="texto-presentacion">
        <h2 class="invitacion">Us hi esperem<br>amb la taula<br>parada i una<br>INEDIT de Damm<br>ben fresca.</h2>
      </div>
    </header>
    <!-- define the wrapper and the container -->
     <div data-barba="container" data-barba-namespace="home">


        <?php include "./template-parts/participantes.html" ?>

      </div>
    </div>

    <?php include "./template-parts/footer.html" ?>
    
  </body>
</html>