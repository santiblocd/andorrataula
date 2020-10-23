<!DOCTYPE html>
<html lang="cfr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Isard</title>
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
          <li><a href="../es/participantes/restaurant-isard.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-isard.php">FR</a></li>
          <li><a href="../participants/restaurant-isard.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="../fr">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="../img/taula.svg"></span> <span class="mayus">en famille</span></h1>
          </div>
        </a>
        <div class="barra-left">
          <div class="container">
            <div class="aligner"></div>
            <!-- START BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <h2>Restaurant Isard</h2>
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
                    <li>Poireaux et potiron confits,<br>dashi et caviar de truite</li>
                    —<br>
                    <li>Champignons, lard de poitrine fumée<br>et rillons de porc</li>
                    —<br>
                    <li>Calmars farcis à la saucisse<br>sur crème d’écrevisse</li>
                    —<br>
                    <li>Queue de bœuf désossée à la ratassia<br>et trompettes de la mort</li>
                    —<br>
                    <li>Tarte Tatin aux kakis<br>et glace à la citronnelle</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>32 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Macaronis gratinés</li>
                    —<br>
                    <li>Cordons bleus</li>
                    —<br>
                    <li>Brownie et glace à la vanille</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>15 €</p>
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
              <a href="mailto:reserves@hotelisard.com" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. Meritxell, 34 · Andorra la Vella</p>
              <p>(+376) 876 800</p>
              <p>Du lundi au dimanche, de 13 h à 15.30 h</p>
              <p>et de 20 h à 22.30 h</p>
              <p>reserves@hotelisard.com</p>
              <br>
              <p><a href="https://www.hotelisard.com/">www.hotelisard.com</a></p>
              <p><a href="#">@isardandorra</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/05.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>