<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Borda Raubert</title>
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
          <li><a href="es/participantes/restaurant-borda-raubert.php">ES</a></li>
          <li><a href="fr/participants/restaurant-borda-raubert.php">FR</a></li>
          <li><a href="participants/restaurant-borda-raubert.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="http://localhost/andorra">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en familia</span></h1>
          </div>
        </a>
        <div class="barra-left">
          <div class="container">
            <div class="aligner"></div>
            <!-- START BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <h2>Restaurant<br>Borda Raubert</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Galleta salada con frutos secos y queso<br>acompañada de una INEDIT de Damm</li>
                    —<br>
                    <li>Ensalada de otoño con queso de oveja y granada<br> o <br>Crema de calabaza<br>con virutas de jamón</li>
                    —<br>
                    <li>Estofado de añojo de Andorra<br>con setas de temporada<br> o <br>Parrillada de carne a la brasa<br>con verduras</li>
                    —<br>
                    <li>Yogur de oveja artesano<br>con confitura de saúco<br> o <br>Tarta de la casa<br>con confitura de grosella y mora</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>30 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú junior</h4>
                  <ul>
                    <li>Galleta salada<br>con frutos secos y queso</li>
                    —<br>
                    <li>Sopa de fiesta mayor con galets</li>
                    —<br>
                    <li>Butifarra del país<br>con patatas fritas</li>
                    —<br>
                    <li>GHelado de chocolate<br>con virutas de chocolate</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>18 €</p>
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
              <a href="https://www.bordaraubert.com/" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Crta. d'Arinsal, km 1,5 · La Massana</p>
              <p>(+376) 835 420</p>
              <p> De lunes a domingo, de 13 h a 15.30 h</p>
              <p>y de 20.30 h a 22.30 h</p>
              <p>Lunes noche ny martes, cerrado</p>
              <p>bordaraubert@gmail.com</p>
              <br>
              <p><a href="https://www.bordaraubert.com/">www.bordaraubert.com</a></p>
              <p><a href="#">@bordadraubert</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('img/participants/andorra-park-hotel-restaurant-es/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide">your 2</div>
          <div class="slide">your 3</div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>