<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Versailles</title>
    <?php include dirname(__FILE__).'/../template-parts/head.html'; ?>
  </head>
  <body>
    <div class="hamburguer">
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
      </div>

   
    <div data-barba="wrapper">
    	<header>
        <?php include dirname(__FILE__).'/../template-parts/header.html'; ?>
        <!-- START Menú > cambio de idiomas -->
        <nav class="menu-lang">
          <li><a href="es/participantes/restaurant-versailles.php">ES</a></li>
          <li><a href="fr/participants/restaurant-versailles.php">FR</a></li>
          <li><a href="participants/restaurant-versailles.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="http://localhost/andorra">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en família</span></h1>
          </div>
        </a>
        <div class="barra-left">
          <div class="container">
            <div class="aligner"></div>
            <!-- START BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <h2>Restaurant Versailles</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú gastronòmic</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula<br>acompanyat d'una INEDIT de Damm</li>
                    —<br>
                    <li>Copa de crema de porros<br>amb brillants d’ibèric</li>
                    —<br>
                    <li>Combinat de foie-gras semicuit<br>i el nostre tàrtar</li>
                    —<br>
                    <li>Broqueta d’onglet<br>amb crema de vi de Borgonya</li>
                    —<br>
                    <li>Crème brulée amb cruixent dolç</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>35 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Pasta al dente amb crema de foie-gras</li>
                    —<br>
                    <li>Hamburguesa del Burguer Zero</li>
                    —<br>
                    <li>Copa de gelat amb nata dolça</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>19 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 2 -->
            </div>
          </div>

          <!-- START LEGAL + DIRECCIÓN -->
          <div class="info-restaurant">
            <div class="direccion">
              <p>IGI inclòs • Begudes no incloses</p>
            </div>
             <div class="boton">
              <a href="mailto:restaurantversaillesandorra@gmail.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Cap del Carrer, 1 · Andorra la Vella</p>
              <p>(+376) 821 331</p>
              <p>De dilluns a dissabte, de 13 h a 16 h</p>
              <p>i de 20 h a 23.30 h</p>
              <p>Dilluns midgia i diumenge, tancat</p>
              <p>restaurantversaillesandorra@gmail.com</p>
              <br>
              <p><a href="#">@versailles_and</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('img/participants/restaurant-versailles/01.jpg')"><div class="tipomenu">Menú gastronòmic</div></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-versailles/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-versailles/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-versailles/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-versailles/05.jpg')"><span class="legal">INEDIT Damm en recomana el consum responsable. Alc. 4,8º</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>