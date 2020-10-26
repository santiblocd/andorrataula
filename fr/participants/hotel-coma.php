<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020 - Hotel Coma</title>
    <?php include dirname(__FILE__).'/../template-parts/head.html'; ?>
    <meta name="description" content="Découvrez le menu traditionnel du restaurant de l’Hotel Coma pour Andorra a Taula 2020 et dégustez ses spécialités accompagnées d'une bière INEDIT de Damm."/>
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
          <li><a href="../es/participantes/hotel-coma.php">ES</a></li>
          <li><a href="../fr/participants/hotel-coma.php">FR</a></li>
          <li><a href="../participants/hotel-coma.php">CA</a></li>
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
              <h2>Hotel Coma</h2>
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
                    <li>Hachis de légumes, tranche<br>de poitrine fumée et piment rouge<br> ou <br>Salade de petit poulet mariné</li>
                    —<br>
                    <li>Queue de bœuf aux champignons<br> ou <br>Morue confite garnie de rouleaux de choux</li>
                    —<br>
                    <li>Figues confites au whisky et glace<br> ou <br>Tarte aux pommes, boule de glace<br>à la vanille et pignons de pins</li>
                    —<br>
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
                    <li>Grosses croquettes de jarret de veau<br>et tomate assaisonnée</li>
                    —<br>
                    <li>Côtes d’agneau<br>et pommes frites maison</li>
                    —<br>
                    <li>Glaces artisanales</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>16 €</p>
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
              <a href="https://www.hotelcoma.com" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Camp de La Tanada, s/n · Ordino</p>
              <p>(+376) 736 100</p>
              <p>Du lundi au dimanche, de 13 h à 15 h</p>
              <p>et de 20 h à 22 h</p>
              <p>hotelcoma@hotelcoma.com</p>
              <br>
              <p><a href="https://www.hotelcoma.com/">www.hotelcoma.com</a></p>
              <p><a href="#">@hotelcoma</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/01.jpg')"><div class="tipomenu">Menu traditionnel</div></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/05.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/hotel-coma/06.jpg')"><span class="legal">La bière INEDIT Damm est à consommer avec modération. 4,8o d’alcool</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>