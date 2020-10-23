<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
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
          <li><a href="../es/participantes/restaurant-borda-raubert.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-borda-raubert.php">FR</a></li>
          <li><a href="../participants/restaurant-borda-raubert.php">CA</a></li>
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
              <h2>Restaurant<br>Borda Raubert</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menu traditionnel</h4>
                  <ul>
                    <li>Gâteaux apéritif, fruits secs et fromage<br>servis avec une bière INEDIT Damm</li>
                    —<br>
                    <li>Salade d’automne au fromage<br>de chèvre et à la grenade<br> ou <br>Crème de potiron<br>parsemée de pétales de jambon</li>
                    —<br>
                    <li>Veau d’Andorre à l’étouffée<br>et champignons de saison<br> ou <br>Assortiment de viandes grillées au feu de bois<br>servies avec des légumes</li>
                    —<br>
                    <li>Yaourt artisanal au lait de brebis<br>servi avec de la confiture de sureau<br> ou <br>Tarte maison<br>à la confiture de groseille et de mûre</li>
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
                    <li>Gâteaux apéritif,<br>fruits secs et fromage</li>
                    —<br>
                    <li>Bouillon de fête aux pâtes</li>
                    —<br>
                    <li>Saucisse du terroir et pommes frites</li>
                    —<br>
                    <li>GGlace au chocolat<br>parsemée de pétales de chocolat</li>
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
              <a href="https://www.bordaraubert.com/" target="_blank">FFaites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Crta. d'Arinsal, km 1,5 · La Massana</p>
              <p>(+376) 835 420</p>
              <p>Du lundi au dimanche, de 13 h à 15.30 h</p>
              <p>et de 20.30 h à 22.30 h</p>
              <p>Fermé le lundi soir et le mardi</p>
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
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-raubert/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-raubert/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-raubert/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-raubert/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-la-borda-raubert/05.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>