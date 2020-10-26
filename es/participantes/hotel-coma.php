<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020 - Hotel Coma</title>
    <?php include dirname(__FILE__).'/../template-parts/head.html'; ?>
    <meta name="description" content="Descubre el menú tradicional del restaurante del Hotel Coma para Andorra a Taula 2020 y degusta sus especialidades acompañadas de una cerveza INEDIT de Damm."/>
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
          <li><a href="../es/participantes/hotel-coma.php">ES</a></li>
          <li><a href="../fr/participants/hotel-coma.php">FR</a></li>
          <li><a href="../participants/hotel-coma.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="../es">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="../img/taula.svg"></span> <span class="mayus">en familia</span></h1>
          </div>
        </a>
        <div class="barra-left">
          <div class="container">
            <div class="aligner"></div>
            <!-- START BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <h2>Hotel Coma</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula<br>acompañado de una INEDIT de Damm</li>
                    —<br>
                    <li>Trinxat con torrezno de panceta y guindilla<br> o <br>Ensalada de picantón escabechado</li>
                    —<br>
                    <li>Rabo de buey con setas<br> o <br>Bacalao confitado con rollitos de col</li>
                    —<br>
                    <li>Higos confitados al whisky<br>con helado<br> o <br>Tarta fina de manzana<br>con helado de vainilla y piñones</li>
                    —<br>
                  </ul>
                </div>
                <div class="preu">
                  <p>32 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula</li>
                    —<br>
                    <li>Croquetones de contraculata de ternera<br>con tomate aliñado</li>
                    —<br>
                    <li>Costillas de cordero<br>con patatas fritas caseras</li>
                    —<br>
                    <li>Helados artesanos</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>16 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 2 -->
            </div>
          </div>

          <!-- START LEGAL + DIRECCIÓN -->
          <div class="info-restaurant">
            <div class="direccion">
              <p>IGI incluido • Bebidas no incluidas</p>
            </div>
             <div class="boton">
              <a href="https://www.hotelcoma.com" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Camp de La Tanada, s/n · Ordino</p>
              <p>(+376) 736 100</p>
              <p>De lunes a domingo, de 13 h a 15 h</p>
              <p>y de 20 h a 22 h</p>
              <p>hotelcoma@hotelcoma.com</p>
              <br>
              <p><a href="https://www.hotelcoma.com/">www.hotelcoma.com</a></p>
              <p><a href="#">@hotelcoma</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
            <div class="slide" style="background-image: url('../img/participants/hotel-coma/01.jpg')"><div class="tipomenu">Menú tradicional</div></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/05.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/06.jpg')"><span class="legal">INEDIT Damm recomienda el consumo responsable. Alc. 4,8º</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>