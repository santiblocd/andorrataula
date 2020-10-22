<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Tòpic</title>
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
          <li><a href="../es/participantes/restaurant-topic.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-topic.php">FR</a></li>
          <li><a href="../participants/restaurant-topic.php">CA</a></li>
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
              <h2>Restaurant Tòpic</h2>
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
                    <li>Ensalada tibia de huevo poché, manzana,<br>panceta y dados de membrillo<br> o <br>Canelón de pollo campero con boletus</li>
                    —<br>
                    <li>Prensado de cordero caramelizado<br>con chalotas y coca de setas<br> o <br>Pulpo a la brasa con romesco de tomillo<br>y patatas del país</li>
                    —<br>
                    <li>Brownie bañado en jarabe de ratafía del pais,<br>menta y chocolate caliente<br> o <br>Piña caramelizada con helado casero<br>de vainilla y lluvia de pistachos</li>
                    —<br>
                  </ul>
                </div>
                <div class="preu">
                  <p>27 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula</li>
                    —<br>
                    <li>Carpaccio de tomate<br>con virutas de jamón ibérico y queso</li>
                    —<br>
                    <li>Hamburguesa de ternera de Andorra<br>con brocheta de patata casera</li>
                    —<br>
                    <li>Flan de huevo con nata o helado artesano</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>15 €</p>
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
              <a href="https://www.hotelcoma/topic.com/" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Carrer Major, 21 · Ordino</p>
              <p>(+376) 736 102</p>
              <p>De lunes a domingo, de 13 h a 16 h</p>
              <p>y de 20 h a 23 h</p>
              <p>matopic@hotelcoma.com</p>
              <br>
              <p><a href="https://www.hotelcoma/topic.com">www.hotelcoma/topic.com</a></p>
              <p><a href="#">@restauranttopic</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/05.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>