<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Plató Restaurant</title>
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
          <li><a href="../es/participantes/plato-restaurant.php">ES</a></li>
          <li><a href="../fr/participants/plato-restaurant.php">FR</a></li>
          <li><a href="../participants/plato-restaurant.php">CA</a></li>
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
              <h2>Plató Restaurant</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menu gastronomique</h4>
                  <ul>
                    <li>Galette à la sardine fumée<br>accompagnée d’une bière INEDIT Damm</li>
                    —<br>
                    <li>Salade du Périgord aux gésiers<br>de canard sautés, lardons,<br>raisins secs, pinions et jambon ibérique</li>
                    —<br>
                    <li>Bouillon de pot-au-feu<br>et grosses coquilles farcies de viande hachée</li>
                    —<br>
                    <li>Morue mijotée à basse température,<br>tomate confite et chips de courgettes</li>
                    —<br>
                    <li>Secrets de porc ibérique cuit<br>au feu de bois et pommes paille</li>
                    -<br>
                    <li>Lingot d’or garni de glace<br>aux cacahuètes salées</li>
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
                    <li>Croquettes de poulet de ferme maison</li>
                    —<br>
                    <li>Bouillon de pot-au-feu<br>et grosses coquilles farcies de viande hachée</li>
                    —<br>
                    <li>Secrets de porc ibérique<br>cuit au feu de bois et pommes paille</li>
                    —<br>
                    <li>Lingot d’or garni de glace<br>aux cacahuètes salées</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>17 €</p>
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
              <a href="https://www.hotel-arthotelandorra.com" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Part de la Creu, 12-25 · Andorra la Vella</p>
              <p>(+376) 760 303</p>
              <p>Du lundi au dimanche, de 13.30 h a 15.30 h</p>
              <p>et de 20 h à 23 h</p>
              <p>arthotel@andorra.ad</p>
              <br>
              <p><a href="https://www.hotel-arthotelandorra.com">www.hotel-arthotelandorra.com</a></p>
              <p><a href="#">@platorestaurant</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/andorra-park-hotel-restaurant-es/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide">your 2</div>
          <div class="slide">your 3</div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>