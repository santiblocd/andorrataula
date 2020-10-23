<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Minim's</title>
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
          <li><a href="../es/participantes/restaurant-minims.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-minims.php">FR</a></li>
          <li><a href="../participants/restaurant-minims.php">CA</a></li>
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
              <h2>Restaurant Minim's</h2>
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
                    <li>Velouté aux herbes des montagnes<br>parsemé de donja croustillante</li>
                    —<br>
                    <li>Plat de légumes grillés,<br>truite saumonée fumée<br>et champignons à la vinaigrette</li>
                    —<br>
                    <li>Tempura de morue<br>et mayonnaise de coing</li>
                    —<br>
                    <li>Bavette de veau d’Andorre<br>servie avec des champignons sautés</li>
                    —<br>
                    <li>Pets-de-nonne à la glace de tomate<br>et au chocolat 100 % cacao</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>30 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Cannellonis maison cal Calones</li>
                    —<br>
                    <li>Poulet à la broche et pommes frites</li>
                    —<br>
                    <li>Pomme caramélisée</li>
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
              <a href="mailto:minims@live.com" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Antic Carrer Major, 5 · Andorra la Vella</p>
              <p>(+376) 867 511</p>
              <p>Du mardi au samedi, de 13 h à 15.30 h</p>
              <p>et de 20.30 h à 22.45 h</p>
              <p>Fermé le lundi et le dimanche</p>
              <p>minims@live.com</p>
              <br>
              <p><a href="#">@moniminims</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('img/participants/restaurant-minims/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-minims/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-minims/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-minims/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-minims/05.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-minims/06.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>