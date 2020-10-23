<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Odetti Bistró</title>
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
          <li><a href="../es/participantes/odetti-bistro.php">ES</a></li>
          <li><a href="../fr/participants/odetti-bistro.php">FR</a></li>
          <li><a href="../participants/odetti-bistro.php">CA</a></li>
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
              <h2>Odetti Bistró</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menu gastronimique</h4>
                  <ul>
                    <li>Amuse-bouche Andorra a Taula<br>servi avec une bière INEDIT Damm</li>
                    —<br>
                    <li>Salade tiède de gésiers,<br>champignons et pignons de pin</li>
                    —<br>
                    <li>Crème de pommes de terre d’Andorre<br>et mosaïque végétale</li>
                    —<br>
                    <li>Morceau de morue<br>servi avec un trio de poivrons grillés</li>
                    —<br>
                    <li>Cannellonis du chef Toni<br>à la béchamel truffée</li>
                    —<br>
                    <li>Coulant au chocolat<br>et glace à la vanille de Tahiti</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>37 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Bouillon de pot-au-feu,<br>vermicelles et boulettes de viande</li>
                    —<br>
                    <li>Cannellonis gratinés</li>
                    —<br>
                    <li>Yaourt artisanal<br>et coulis de fruits rouges</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>18 €</p>
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
              <a href="mailto:toska.andorra2018@gmail.com" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Santa Anna, 14 · Escaldes-Engordany</p>
              <p>(+376) 807 575</p>
              <p>Du lundi au dimanche, de 13 h à 15.30 h</p>
              <p>et de 20 h à 22.30 h</p>
              <p>Fermé le mercredi<br>
              <p>toska.andorra2018@gmail.com</p>
              <br>
              <p><a href="#">@odettibistro</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/odetti-bistro/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('../img/participants/odetti-bistro/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/odetti-bistro/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/odetti-bistro/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/odetti-bistro/05.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/odetti-bistro/06.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>