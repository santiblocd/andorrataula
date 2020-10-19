<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Minim's</title>
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
          <li><a href="es/participantes/restaurant-minims.php">ES</a></li>
          <li><a href="fr/participants/restaurant-minims.php">FR</a></li>
          <li><a href="participants/restaurant-minims.php">CA</a></li>
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
              <h2>Restaurant Minim's</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú gastronómico</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula<br>acompañado de una Inedit Damm</li>
                    —<br>
                    <li>Crema de hierbas de montaña<br>con donja crujiente</li>
                    —<br>
                    <li>Timbal de escalivada<br>con trucha asalmonada ahumada<br>y negrillas con vinagreta</li>
                    —<br>
                    <li>Tempura de bacalao<br>con mayonesa de membrillo</li>
                    —<br>
                    <li>Picaña de ternera de Andorra<br>con setas salteadas</li>
                    -<br>
                    <li>Buñuelos de viento con helado de tomate<br> y chocolate 100% cacao</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>30 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula</li>
                    —<br>
                    <li>Canelones de cal Calones</li>
                    —<br>
                    <li>Pollo al ast con patatas chips</li>
                    —<br>
                    <li>Manzana caramelizada</li>
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
              <p>IGI incluido • Bebidas no inlcuidas</p>
            </div>
             <div class="boton">
              <a href="mailto:minims@live.com" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Antic Carrer Major, 5 · Andorra la Vella</p>
              <p>(+376) 867 511</p>
              <p>De martes a sábado, de 13 h a 15.30 h</p>
              <p>y de 20.30 h a 22.45 h</p>
              <p>Lunes y domingo, cerrado</p>
              <p>minims@live.com</p>
              <br>
              <p><a href="#">@moniminims</a></p>
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