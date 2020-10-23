<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant La Borda de l'avi</title>
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
          <li><a href="../es/participantes/restaurant-la-borda-de-lavi.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-la-borda-de-lavi.php">FR</a></li>
          <li><a href="../participants/restaurant-la-borda-de-lavi.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="http://localhost/andorra">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en famille</span></h1>
          </div>
        </a>
        <div class="barra-left">
          <div class="container">
            <div class="aligner"></div>
            <!-- START BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <h2>Restaurant<br>La Borda de l'avi</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menu traditionnel</h4>
                  <ul>
                    <li>Amuse-bouche Andorra a Taula<br>servi avec une bière INEDIT Damm</li>
                    —<br>
                    <li>Salade tiède de morue et poivrons rouges<br>grillés assaisonnée à la vinaigrette de miso<br> ou <br>Cannelloni traditionnels<br>gratinés et béchamel aux cèpes</li>
                    —<br>
                    <li>Calmars à la plancha<br>sur lit de févettes sautées<br> ou <br>Entrecôte de veau du terroir<br>et pommes de terre grillées au feu de bois,<br>tomate à la provençal et piments verts de Padrón</li>
                    —<br>
                    <li>Crème renversée maison aux châtaignes<br> ou <br>Tarte Tatin aux poires<br>accompagnée de glace à la crème Chantilly</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>38 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Crème de potiron parsemée<br>de pétales de jambon ibérique</li>
                    —<br>
                    <li>Minientrecôte du terroir grillée<br>au feu de bois, pommes frites</li>
                    —<br>
                    <li>Coulant au chocolat<br>et sorbet au citron</li>
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
              <a href="https://www.restaurantelabordadelavi.com/" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. del Ravell, 38 · La Massana</p>
              <p>(+376) 835 154</p>
              <p>Du lundi au dimanche, de 13 h à 15.30 h</p>
              <p>et de 20 h à 22.30 h</p>
              <p>bordaavi@andorra.ad</p>
              <br>
              <p><a href="https://www.restaurantelabordadelavi.com/">www.restaurantelabordadelavi.com</a></p>
              <p><a href="#">@bordadelavi</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-de-lavi/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-de-lavi/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-de-lavi/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-de-lavi/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-de-lavi/05.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-de-lavi/06.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>