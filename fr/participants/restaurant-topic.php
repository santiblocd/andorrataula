<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Tòpic</title>
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
          <li><a href="../es/participantes/restaurant-topic.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-topic.php">FR</a></li>
          <li><a href="../participants/restaurant-topic.php">CA</a></li>
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
              <h2>Restaurant Tòpic</h2>
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
                    <li>Salade tiède composée d’un œuf poché,<br>, de pomme, de poitrine de porc fumée<br>et persillée et de dés de gelée de coing<br> ou <br>Cannellonis de poulet de ferme et cèpes</li>
                    —<br>
                    <li>Lingot d’agneau caramélisé aux échalottes<br>et galette de champignons<br> ou <br>Poulpe cuit au feu de bois,<br>assaisonné au romesco de thym<br>et garni de pommes de terre du terroir</li>
                    —<br>
                    <li>Brownie arrosé de sirop de ratafia de nos vallées,<br>menthe et chocolat chaud<br> ou <br>Ananas caramélisé garni de glace maison<br>à la vanille et parsemé de pistaches</li>
                    —<br>
                  </ul>
                </div>
                <div class="preu">
                  <p>27 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Carpaccio de tomate et pétales<br>de jambon ibérique et de fromage</li>
                    —<br>
                    <li>Burger de veau d’Andorre<br>et brochette de pommes de terre maison</li>
                    —<br>
                    <li>Crème renversée aux œufs<br>garnie de crème Chantilly et de glace artisanale</li>
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
              <a href="https://www.hotelcoma/topic.com/" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Carrer Major, 21 · Ordino</p>
              <p>(+376) 736 102</p>
              <p>Du lundi au dimanche, de 13 h à 16 h</p>
              <p>et de 20 h à 23 h</p>
              <p>matopic@hotelcoma.com</p>
              <br>
              <p><a href="https://www.hotelcoma/topic.com">www.hotelcoma/topic.com</a></p>
              <p><a href="#">@restauranttopic</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-topic/05.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>