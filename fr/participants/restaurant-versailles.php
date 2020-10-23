<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Versailles</title>
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
          <li><a href="../es/participantes/restaurant-versailles.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-versailles.php">FR</a></li>
          <li><a href="../participants/restaurant-versailles.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="../fr">
          <div class="circle titulo">
            <h1><span class="minus">Andorre</span><span><img src="../img/taula.svg"></span> <span class="mayus">en famille</span></h1>
          </div>
        </a>
        <div class="barra-left">
          <div class="container">
            <div class="aligner"></div>
            <!-- START BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <h2>Restaurant Versailles</h2>
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
                    <li>Coupe de velouté au poireaux<br>et pépites de jambon ibérique</li>
                    —<br>
                    <li>Combiné de foie gras mi-cuit<br>accompagné de notre tartare</li>
                    —<br>
                    <li>Brochette d’onglet<br>à la crème de vin de Bourgogne</li>
                    —<br>
                    <li>Crème brûlée et croustillant au sucre</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>35 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Pâtes al dente farcies de crème de foie gras</li>
                    —<br>
                    <li>Burger du Burger Zéro</li>
                    —<br>
                    <li>Coupe de glace garnie de crème Chantilly</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>19 €</p>
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
              <a href="mailto:restaurantversaillesandorra@gmail.com" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Cap del Carrer, 1 · Andorra la Vella</p>
              <p>(+376) 821 331</p>
              <p>Du lundi au samedi, de 13 h à 16 h</p>
              <p>et de 20 h à 23.30 h</p>
              <p>Fermé le lundi midi et le dimanche</p>
              <p>restaurantversaillesandorra@gmail.com</p>
              <br>
              <p><a href="#">@versailles_and</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/restaurant-versailles/01.jpg')"><div class="tipomenu">Menu gastronomique</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-versailles/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-versailles/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-versailles/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-versailles/05.jpg')"><span class="legal">La bière INEDIT Damm est à consommer avec modération. 4,8o d’alcool</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>