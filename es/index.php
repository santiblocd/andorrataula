<!DOCTYPE html>
<html lang="es">

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
          <li><a href="es">ES</a></li>
          <li><a href="./fr">FR</a></li>
          <li><a href="./">CA</a></li>
        </nav>
      <div class="texto-presentacion">
        <h2 class="invitacion">Us hi esperem <br>amb la taula <br>parada i una <br>Inedit de Damm <br>ben fresca.</h2>
      </div>
  	</header>
    <div data-barba="container" data-barba-namespace="home"> 
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="../img/taula.svg"></span> <span class="mayus">en família</span></h1>
          </div>
          <div class="circle date">
            <p>Desde el <br>30 de octubre<br> al 29 de<br> noviembre</p>
          </div>
          <div class="circle info">
            <p>Menús <br>gastronòmics <br>maridats <br>amb Inedit <br>-<br> 14es jornades<br> de cuina <br> andorrana</p>
          </div>
          <a href="es/participants.php">
            <div class="circle boton">
              <p>Descobreix <br>els establiments<br> participants.</p>
            </div>
          </a>
          <div id="intro-slider">
          </div>
    </div>
  </div>

  <?php include "./template-parts/footer.html" ?>

  </body>
</html>