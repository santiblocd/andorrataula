<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant El Refugi Alpí</title>
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
          <li><a href="../es/participantes/restaurant-el-refugi-alpi.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-el-refugi-alpi.php">FR</a></li>
          <li><a href="../participants/restaurant-el-refugi-alpi.php">CA</a></li>
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
              <h2>Restaurant El Refugi Alpí</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula<br>acompanyat d'una INEDIT de Damm</li>
                    —<br>
                    <li>Trinxat de muntanya a baixa temperatura<br>i cruixent de cansalada viada<br> o <br>Amanida tèbia de perdiu amb vinagreta</li>
                    —<br>
                    <li>Llom de bacallà confitat<br>amb carxofes saltades i alls tendres<br> o <br>Òpera de muntanya:<br>espatlla de cabrit amb cremós de patates i tòfona<br>acompanyada de bolets de temporada</li>
                    —<br>
                    <li>Pa de pessic de xocolata i nous,<br>crema de vainilla i fruita seca<br> o <br>Cruixent de milfulls amb mató<br>i mel del Pirineu</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>39 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Canelons d’Andorra amb beixamel</li>
                    —<br>
                    <li>Escalopa milanesa amb patates fregides</li>
                    —<br>
                    <li>Crep per escollir</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>15 €</p>
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
              <a href="https://www.elrefugialpi.ad" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. Meritxell, 73 · Andorra la Vella</p>
              <p>(+376) 808 100</p>
              <p>De dilluns a diumenge, de 13 h a 16 h</p>
              <p>i de 20 h a 23 h</p>
              <p>elrefugialpi@elrefugialpi.ad</p>
              <br>
              <p><a href="https://www.elrefugialpi.ad">www.elrefugialpi.ad</a></p>
              <p><a href="#">@elrefugialpi</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('img/participants/restaurant-el-refugi-alpi/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-el-refugi-alpi/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-el-refugi-alpi/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-el-refugi-alpi/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-el-refugi-alpi/05.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>