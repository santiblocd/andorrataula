<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
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
          <li><a href="../es/participantes/restaurant-panxo.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-panxo.php">FR</a></li>
          <li><a href="../participants/restaurant-panxo.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="../fr">
          <div class="circle titulo">
            <div class="circle titulo">
              <h1><span class="minus">Andorre</span><span><img src="../img/taula.svg"></span> <span class="mayus">en famille</span></h1>
            </div>
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
                  <h4>Menu gastronomique</h4>
                  <ul>
                    <li>Amuse-bouche Andorra a Taula<br>servi avec une bière INEDIT Damm</li>
                    —<br>
                    <li>Rondelle de foie gras,<br>chocolat blanc et framboise</li>
                    —<br>
                    <li>Fèves d’édamames sautées au canard,<br>aux shiitakes, à l’œuf et à la truffe</li>
                    —<br>
                    <li>Tartare de thon, pommes paille<br>et œufs frits brisés</li>
                    —<br>
                    <li>Côtelette de porc<br>cuite à basse température<br>et glacée au miso</li>
                    —<br>
                    <li>Notre tarte Tatin<br>accompagnée de glace au thé matcha</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>40 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Pâtes soba sautées aux légumes<br>et au porc ibérique, sauce teriyaki</li>
                    —<br>
                    <li>Fingers de poulet<br>à la sauce tonkatsu</li>
                    —<br>
                    <li>Glace au choix</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>20 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 2 -->
            </div>
          </div>

          <!-- START LEGAL + DIRECCIÓN -->
          <div class="info-restaurant">
            <div class="direccion">
              <p>TTC • Boissons non comprises</p>
            </div>
             <div class="boton">
              <a href="https://www.restaurantpanxo.com/" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Isabelle Sandy, 3 · Escaldes-Engordany</p>
              <p>(+376) 380 192</p>
              <p>Du lundi au samedi, de 13 h à 15.30 h</p>
              <p>et de 20.30 h à 23 h</p>
              <p>Fermé le lundi midi et le dimanche</p>
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
          <div class="slide" style="background-image: url('../img/participants/restaurant-panxo/01.jpg')"><div class="tipomenu">Menu gastronomique</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-panxo/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-panxo/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-panxo/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-panxo/05.jpg')"><span class="legal">La bière INEDIT Damm est à consommer avec modération. 4,8o d’alcool</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>