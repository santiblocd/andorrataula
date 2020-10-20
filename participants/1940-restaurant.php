<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>1940 Restaurant</title>
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
          <li><a href="es/participantes/1940-restaurant.php">ES</a></li>
          <li><a href="fr/participants/1940-restaurant.php">FR</a></li>
          <li><a href="participants/a1940-restaurant.php">CA</a></li>
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
              <h2>1940 Restaurant</h2>
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
                    <li>Amanida de bolets escabetxats amb cruixent<br>de llom ibèric i vinagreta de festucs<br> o <br>Lasanya de carxofes i gambes<br>amb salsa americana</li>
                    —<br>
                    <li>Civet de caça amb cebetes,<br>bolets i trumfes<br> o <br>Pota de pop amb ceba, pebre vermell<br>de la Vera, cloïsses i mongetes</li>
                    —<br>
                    <li>Torrada de brioix<br>amb gelat de canyella<br> o <br>Mousse de mel i mató<br>amb nous caramel•litzades</li>
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
                    <li>Caneló de pollastre i verdures<br>amb beixamel gratinat al forn</li>
                    —<br>
                    <li>Medallons de filet de bou<br>amb trumfes fregides i salsa barbacoa</li>
                    —<br>
                    <li>Flam de toffee<br>amb nata i caramel</li>
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
              <a href="https://www.1940restaurant.com/" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. Príncep Benlloch, 24 · Andorra la Vella</p>
              <p>(+376) 860 006</p>
              <p> De dilluns a diumenge, de 12 h a 15 h</p>
              <p>i de 20.30 h a 22.30 h</p>
              <p>Dimarts, tancat</p>
              <p>info@1940restaurant.com</p>
              <br>
              <p><a href="https://www.1940restaurant.com/">www.1940restaurant.com</a></p>
              <p><a href="#">@1940restaurant</a></p>
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