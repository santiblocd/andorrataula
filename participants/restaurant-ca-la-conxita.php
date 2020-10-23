<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Ca la Conxita</title>
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
          <li><a href="es/participantes/restaurant-ca-la-conxita.php">ES</a></li>
          <li><a href="fr/participants/restaurant-ca-la-conxita.php">FR</a></li>
          <li><a href="participants/restaurant-ca-la-conxita.php">CA</a></li>
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
              <h2>Restaurant Ca la Conxita</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula<br>acompanyat d’una INEDIT de Damm</li>
                    —<br>
                    <li>Pasta variada amb quatre formatges<br> o <br>Amanida de tomata amb mozzarella<br>i pernil d’ànec amb salsa </li>
                    —<br>
                    <li>Pop a la planxa<br>amb verduretes al romesco<br> o <br>Cua de bou estofada amb bolets</li>
                    —<br>
                    <li>Postres per escollir</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>30 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Macarrons de la Conxita</li>
                    —<br>
                    <li>Nuggets de pollastre<br>amb patates gratinades al forn</li>
                    —<br>
                    <li>Postres per escollir</li>
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
              <a href="mailto:calaconxita@yahoo.es" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. La Llacuna, 12 · Andorra la Vella</p>
              <p>(+376) 829 948</p>
              <p> De dilluns a diumenge, de 13.30 h a 15 h</p>
              <p>i de 20.30 h a 23 h</p>
              <p>Dilluns i diumenge nit, tancat</p>
              <p>calaconxita@yahoo.es</p>
              <br>
              <p><a href="#">@calaconxita_restaurant.and</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('img/participants/restaurant-ca-la-conxita/01.jpg')"><div class="tipomenu">Menú tradicional</div></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-ca-la-conxita/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-ca-la-conxita/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-ca-la-conxita/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-ca-la-conxita/05.jpg')"><span class="legal">INEDIT Damm en recomana el consum responsable. Alc. 4,8º</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>