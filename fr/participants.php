<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020 - Participants</title>
    <?php include "./template-parts/head.html" ?>
    <meta name="description" content="Des restaurants de toute l'Andorre présentent leurs propositions de menus gastronomiques et traditionnels pour cette édition d'Andorra a Taula 2020."/>
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
          <h2 class="invitacion">La table est dressée,<br>une bière<br>INEDIT Damm<br>bien fraîche<br>est à votre disposition :<br>nous n’attendons<br>plus que vous.</h2></h2>
        </div>
    	</header>
      <div data-barba="container" data-barba-namespace="home">


        <?php include "./template-parts/participantes.html" ?>

      </div>
    </div>

    <?php include "./template-parts/footer.html" ?>
    
  </body>
</html>