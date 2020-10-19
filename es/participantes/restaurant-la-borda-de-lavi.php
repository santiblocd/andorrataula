<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant la borda de l'avi</title>
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
          <li><a href="es/participantes/restaurant-la-borda-de-lavi.php">ES</a></li>
          <li><a href="fr/participants/restaurant-la-borda-de-lavi.php">FR</a></li>
          <li><a href="participants/restaurant-la-borda-de-lavi.php">CA</a></li>
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
              <h2>Restaurant<br>La borda de l'avi</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula<br>acompañado de una Inedit Damm</li>
                    —<br>
                    <li>Ensalada templada de bacalao<br>con pimientos rojos asados y vinagreta de miso<br> o <br>Canelones tradicionales<br>gratinados con bechamel de boletus</li>
                    —<br>
                    <li>Calamares a la plancha<br>sobre un lecho de habitas salteadas<br> o <br>Entrecot de ternera del país a la brasa con patata,<br>tomate a la provenzal y pimientos de Padrón</li>
                    —<br>
                    <li>Flan casero de castañas<br> o <br>Tarta Tatin de pera con helado de nata</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>38 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú junior</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula</li>
                    —<br>
                    <li>Crema de calabaza<br>con virutas de jamón ibérico</li>
                    —<br>
                    <li>Minientrecot del país a la brasa<br>con patatas fritas</li>
                    —<br>
                    <li>Coulant de chocolate<br>con sorbete de limón</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>20 €</p>
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
              <a href="https://www.restaurantelabordadelavi.com/" target="_blank">Haz tu <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. del Ravell, 38 · La Massana</p>
              <p>(+376) 835 154</p>
              <p> De lunes a domingo, de 13 h a 15.30 h</p>
              <p>y de 20 h a 22.30 h</p>
              <p>bordaavi@andorra.ad</p>
              <br>
              <p><a href="https://www.restaurantelabordadelavi.com/">www.restaurantelabordadelavi.com</a></p>
              <p><a href="#">@bordadelavi</a></p>
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