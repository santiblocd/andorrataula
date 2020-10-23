<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
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
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en família</span></h1>
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
                    <li>Galeta salada amb fruita seca i formartge<br>acompanyada d’una INEDIT de Damm</li>
                    —<br>
                    <li>Amanida de tardor<br>amb formatge d’ovella i magrana<br> o <br>Crema de carabassa<br>amb encenalls de pernil</li>
                    —<br>
                    <li>Estofat d’anoll d’Andorra<br>amb bolets de temporada<br> o <br> Graellada de carn a la brasa<br>amb verdures</li>
                    —<br>
                    <li>Iogurt d’ovella artesà<br>amb confitura de saüc<br> o <br>Pastís de la casa<br>amb confitura de grosella i mora</li>
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
                    <li>Galeta salada<br>amb fruita seca i formatge</li>
                    —<br>
                    <li>Sopa de festa major amb galets</li>
                    —<br>
                    <li>Botifarra del país<br>amb patates fregides</li>
                    —<br>
                    <li>Gelat de xocolata<br>amb encenalls de xocolata</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>18 €</p>
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
              <a href="https://www.bordaraubert.com/" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Crta. d'Arinsal, km 1,5 · La Massana</p>
              <p>(+376) 835 420</p>
              <p> De dilluns a diumenge, de 13 h a 15.30 h</p>
              <p>i de 20.30 h a 22.30 h</p>
              <p>Dilluns nit i dimarts, tancat</p>
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
          <div class="slide" style="background-image: url('img/participants/restaurant-la-borda-raubert/01.jpg')"><div class="tipomenu">Menú tradicional</div></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-la-borda-raubert/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-la-borda-raubert/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-la-borda-raubert/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-la-borda-raubert/05.jpg')"></div><div class="legal">INEDIT Damm en recomana el consum responsable. Alc. 4,8º</div></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>