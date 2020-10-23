<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Hotel Coma</title>
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
          <li><a href="es/participantes/hotel-coma.php">ES</a></li>
          <li><a href="fr/participants/hotel-coma.php">FR</a></li>
          <li><a href="participants/hotel-coma.php">CA</a></li>
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
              <h2>Hotel Coma</h2>
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
                    <li>Trinxat amb rosta de cansalada<br>viada i bitxo<br> o <br>Amanida de picantó escabetxat</li>
                    —<br>
                    <li>Cua de bou amb bolets<br> o <br>Bacallà confitat amb farcellets de col</li>
                    —<br>
                    <li>Figues confitades al whisky<br>amb gelat<br> o <br>Tarta fina de poma<br>amb gelat de vainilla i pinyons</li>
                    —<br>
                  </ul>
                </div>
                <div class="preu">
                  <p>32 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Croquetons de jarret de vedella<br>amb tomàquet amanit</li>
                    —<br>
                    <li>Costelles de xai<br>amb patates fregides casolanes</li>
                    —<br>
                    <li>Gelats artesans</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>16 €</p>
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
              <a href="https://www.hotelcoma.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Camp de La Tanada, s/n · Ordino</p>
              <p>(+376) 736 100</p>
              <p> De dilluns a diumenge, de 13 h a 15 h</p>
              <p>i de 20 h a 22 h</p>
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
          <div class="slide" style="background-image: url('img/participants/hotel-coma/01.jpg')"><div class="tipomenu">Menú tradicional</div></div>
          <div class="slide" style="background-image: url('img/participants/hotel-coma/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/hotel-coma/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/hotel-coma/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/hotel-coma/05.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/hotel-coma/06.jpg')"><span class="legal">INEDIT Damm en recomana el consum responsable. Alc. 4,8º</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>