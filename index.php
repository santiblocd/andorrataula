<!DOCTYPE html>
<html lang="ca">

  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020</title>
    </script>
     <?php include "./template-parts/head.html" ?>

    
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
          <li><a href="#">CA</a></li>
        </nav>
      <div class="texto-presentacion">
        <h2 class="invitacion">Us hi esperem<br>amb la taula<br>parada i una<br>INEDIT de Damm<br>ben fresca.</h2>
      </div>
  	</header>
    <!-- define the wrapper and the container -->
    <div data-barba="container" data-barba-namespace="home"> 
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en família</span></h1>
          </div>
          <div class="circle date">
            <p>Del 30 <br>d'octubre<br> al 29 de<br> novembre</p>
          </div>
          <div class="circle info">
            <p>Menús<br>tradicionals<br>i gastronòmics<br>maridats<br>amb INEDIT de Damm<br>-<br>14es jornades<br>de cuina<br>andorrana</p>
          </div>
          <a href="participants.php">
            <div class="circle boton">
              <p>Descobreix<br>els establiments<br>que hi participen</p>
            </div>
          </a>
          <div id="intro-slider">
            <div class="legal">INEDIT Damm en recomana el consum responsable. Alc. 4,8º</div>
          </div>
    </div>
  </div>

  <?php include "./template-parts/footer.html" ?>

  </body>
</html>