<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
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
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en família</span></h1>
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
                    <li>Aperitiu Andorra a Taula<br>acompanyat d'una INEDIT de Damm</li>
                    —<br>
                    <li>Amanida tèbia d’ou escaldat, poma<br>cansalada viada i daus de codonyat<br> o <br>Caneló de pollastre de pagès amb ceps</li>
                    —<br>
                    <li>Premsat de xai caramel•litzat<br>amb escalunyes i coca de bolets<br> o <br>Pop a la brasa amb romesco de farigola<br>i trumfes del país</li>
                    —<br>
                    <li>Brownie banyat en xarop de ratafia de les valls,<br>menta i xocolata calenta<br> o <br>Pinya caramel•litzada amb gelat casolà<br>de vainilla i pluja de festucs</li>
                    —<br>
                  </ul>
                </div>
                <div class="preu">
                  <p>27 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Carpaccio de tomàquet<br>amb encenalls de pernil ibèric i formatge</li>
                    —<br>
                    <li>Hamburguesa de vedella d’Andorra<br>amb broqueta de patata casolana</li>
                    —<br>
                    <li>Flam d’ou amb nata o gelat artesà</li>
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
              <a href="https://www.hotelcoma/topic.com/" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Carrer Major, 21 · Ordino</p>
              <p>(+376) 736 102</p>
              <p>De dilluns a diumenge, de 13 h a 16 h</p>
              <p>i de 20 h a 23 h</p>
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
          <div class="slide" style="background-image: url('img/participants/restaurant-topic/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-topic/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-topic/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-topic/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-topic/05.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>