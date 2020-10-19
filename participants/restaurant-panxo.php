<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Panxo</title>
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
          <li><a href="es/participantes/restaurant-panxo.php">ES</a></li>
          <li><a href="fr/participants/restaurant-panxo.php">FR</a></li>
          <li><a href="participants/restaurant-panxo.php">CA</a></li>
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
              <h2>Restaurant Panxo</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú gastronòmic</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula<br>acompanyat d'una Inedit Damm</li>
                    —<br>
                    <li>Filipino de foie-gras,<br>xocolata blanca i gerds</li>
                    —<br>
                    <li>Edamames saltats amb ànec,<br>xiitakes, ou i tòfona</li>
                    —<br>
                    <li>Tàrtar de tonyina, patates palla<br>i ous trencats</li>
                    —<br>
                    <li>Costella de porc<br>cuita a baixa temperatura<br>i glacejada amb miso</li>
                    —<br>
                    <li>El nostre pastís Tatin<br>amb gelat de te matxa</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>40 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Fideus soba saltats amb verduretes<br>i presa ibèrica amb teriyaki</li>
                    —<br>
                    <li>Fingers de pollastre<br>amb salsa tonkatsu</li>
                    —<br>
                    <li>Gelat per escollir</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>20 €</p>
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
              <a href="https://www.restaurantpanxo.com/" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Isabelle Sandy, 3 · Escaldes-Engordany</p>
              <p>(+376) 380 192</p>
              <p>De dilluns a dissabte, de 13 h a 15.30 h</p>
              <p>i de 20.30 h a 23 h</p>
              <p>Dilluns migdia i diumenge, tancat
              <p>restaurantpanxo@gmail.com</p>
              <br>
              <p><a href="https://www.restaurantpanxo.com">www.restaurantpanxo.com</a></p>
              <p><a href="#">@restaurantpanxo</a></p>
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