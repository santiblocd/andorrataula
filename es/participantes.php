<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020 - Participantes</title>
    <?php include "./template-parts/head.html" ?>
    <meta name="description" content="Restaurantes de toda Andorra presentan sus propuestas de menús gastronómicos y tradicionales para esta edición de Andorra a Taula 2020."/>
  </head>
  <body>

    <!-- define the wrapper and the container -->
    <div data-barba="wrapper">
      <nav class="menu-lang">
          <li><a href="../es/participantes.php">ES</a></li>
          <li><a href="../fr/participants.php">FR</a></li>
          <li><a href="../participants.php">CA</a></li>
        </nav>
      <div class="hamburguer">
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
      </div>
    	<header>
        <?php include "./template-parts/header.html" ?>
        <div class="texto-presentacion">
          <h2 class="invitacion">Os esperamos<br>con la mesa<br>a punto<br>y una INEDIT<br>de Damm<br>bien fresca.</h2>
        </div>
    	</header>
      <div data-barba="container" data-barba-namespace="home">


        <?php include "./template-parts/participantes.html" ?>

    </div>

    <?php include "./template-parts/footer.html" ?>
    
  </body>
</html>