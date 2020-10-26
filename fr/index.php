<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020</title>
    </script>
     <?php include "./template-parts/head.html" ?>

    <!-- define the wrapper and the container -->
     <div class="hamburguer">
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
      </div>
  <div data-barba="wrapper">
  	<header>
     
      <?php include "./template-parts/header.html" ?>
      <nav class="menu-lang">
          <li><a href="../es/index.php">ES</a></li>
          <li><a href="../fr/index.php">FR</a></li>
          <li><a href="../index.php">CA</a></li>
        </nav>
      <div class="texto-presentacion">
        <h2 class="invitacion">La table est dressée,<br>une bière INEDIT Damm<br>bien fraîche<br>est à votre disposition :<br>nous n’attendons<br>plus que vous.</h2>
      </div>
  	</header>
    <div data-barba="container" data-barba-namespace="home"> 
          <div class="circle titulo">
            <h1><span class="minus">Andorre</span><span><img src="./img/taula.svg"></span> <span class="mayus">en famille</span></h1>
          </div>
          <div class="circle date">
            <p>Du 30 de octobre<br>au 29 novembre</p>
          </div>
          <div class="circle info">
            <p>Menus traditionnels<br>et gastronomiques<br>accompagnésd'une biere<br>INEDIT Damm<br>-<br>14e journées<br>de cuisine<br>andorrane</p>
          </div>
          <a href="participants.php">
            <div class="circle boton">
              <p>Décovrez<br>les établissement<br>participants</p>
            </div>
          </a>
          <div id="intro-slider">
             <div class="legal">La bière INEDIT Damm est à consommer avec modération. 4,8o d’alcool.</div>
          </div>
    </div>
  </div>

  <?php include "./template-parts/footer.html" ?>

  </body>
</html>