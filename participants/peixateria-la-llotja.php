<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Peixateria Desgustació La Llotja</title>
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
          <li><a href="es/participantes/peixateria-la-llotja.php">ES</a></li>
          <li><a href="fr/participants/peixateria-la-llotja.php">FR</a></li>
          <li><a href="participants/peixateria-la-llotja.php">CA</a></li>
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
              <h2>Peixateria Degustació<br>La Llotja</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Blini de salmó marinat<br>acompanyat d'una Inedit Damm</li>
                    —<br>
                    <li>Cassoleta de bivalves<br> o <br>Trio de tàrtars</li>
                    —<br>
                    <li>Papillota de llenguado i llegums<br> o <br>Tataki de tonyina Bluefin<br>amb algues wakame</li>
                    —<br>
                    <li>Coulant de xocolata<br>amb salsa de gerds<br> o <br>Maroshna al plat</li>
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
                    <li>Raviolis de salmó</li>
                    —<br>
                    <li>Hamburguesa de rap i gamba<br>amb patates al forn</li>
                    —<br>
                    <li>Maroshna al plat</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>17 €</p>
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
              <a href="mailto:andorralallotja@gmail.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Santa Anna, local 1 · Escaldes-Engordany</p>
              <p>(+376) 820 912</p>
              <p> De dimarts a dissabte, de 13 h a 15 h</p>
              <p>i de 20 h a 21.30 h</p>
              <p>Dilluns i diumenge, tancat</p>
              <p>andorralallotja@gmail.com</p>
              <br>
              <p><a href="#">@la_llotja_andorra</a></p>
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