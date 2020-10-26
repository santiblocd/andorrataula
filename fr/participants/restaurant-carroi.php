<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020 - Restaurant Carroi</title>
    <?php include dirname(__FILE__).'/../template-parts/head.html'; ?>
    <meta name="description" content="Découvrez le menu traditionnel du Restaurant Carroi pour Andorra a Taula 2020 et dégustez ses spécialités accompagnées d'une bière INEDIT de Damm."/>

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
          <li><a href="../es/participantes/restaurant-carroi.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-carroi.php">FR</a></li>
          <li><a href="../participants/restaurant-carroi.php">CA</a></li>
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
              <h2>Restaurant Carroi</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menu traditionnel</h4>
                  <ul>
                    <li>Fouet d’Andorre de Cal Jordi<br>servi avec une bière INEDIT Damm</li>
                    —<br>
                    <li>Salade de saumon mariné, pomme verte,<br>vinaigrette aux fruits rouges et poivre de Sichuan<br> ou <br>Crème de potiron aux amandes<br>et jambon ibérique en nuage</li>
                    —<br>
                    <li>Filet de morue confit,<br>sauté de choux chinois et girolles,<br>sauce douce à l’ail<br> ou <br>Saucisse d’Andorre de Cal Jordi,<br>purée à la truffe, œuf poché,<br>foie gras et caramel de vin</li>
                    —<br>
                    <li>Macédoine de fruit à la coriandre<br>et sorbet de melon Cantaloup</li>
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
                    <li>Fouet d'Andorre de Cal Jordi </li>
                    —<br>
                    <li>Queues de gambas panées et salade</li>
                    —<br>
                    <li>Burger de veau d’Andorre grillé,<br>purée de pomme de terre<br>et julienne de jambon ibérique</li>
                    —<br>
                    <li>Macédoine de fruits</li>
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
              <a href="https://www.abbaxaletsuiteshotel.com" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Terra Major s/n · Sispony (La Massana)</p>
              <p>(+376) 737 300</p>
              <p>Du lundi au dimanche, de 13 h à 15.30 h</p>
              <p>et de 20 h à 22.30 h</p>
              <p>xaletsuites@abbahotels.com</p>
              <br>
              <p><a href="https://www.abbaxaletsuiteshotel.com">www.abbaxaletsuiteshotel.com</a></p>
              <p><a href="#">@abbaxaletsuites</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
           <div class="slide" style="background-image: url('../img/participants/restaurant-carroi/01.jpg')"><div class="tipomenu">Menu traditionnel</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-carroi/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-carroi/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-carroi/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-carroi/05.jpg')"><span class="legal">La bière INEDIT Damm est à consommer avec modération. 4,8o d’alcool</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>