<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Peixateria Desgustació La Llotja</title>
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
          <li><a href="../es/participantes/peixateria-la-llotja.php">ES</a></li>
          <li><a href="../fr/participants/peixateria-la-llotja.php">FR</a></li>
          <li><a href="../participants/peixateria-la-llotja.php">CA</a></li>
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
              <h2>Peixateria Degustació<br>La Llotja</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menu traditionnel</h4>
                  <ul>
                    <li>Blini au saumon mariné<br>servi avec une bière INEDIT Damm</li>
                    —<br>
                    <li>Poêlée de mollusques<br> ou <br>Trio de tartares</li>
                    —<br>
                    <li>Papillote de sole et légumes<br> ou <br>Tataki au thon rouge Bluefin<br>et algue wakame</li>
                    —<br>
                    <li>Coulant au chocolat<br>et sauce aux framboises<br> ou <br>Crème glacée « Maroshna »</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>40 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Raviolis au saumon</li>
                    —<br>
                    <li>Burger de lotte et de crevettes<br>servi avec des pommes de terre au four</li>
                    —<br>
                    <li>Crème glacée « Maroshna »</li>
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
              <a href="mailto:andorralallotja@gmail.com" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Santa Anna, local 1 · Escaldes-Engordany</p>
              <p>(+376) 820 912</p>
              <p>Du mardi au samedi, de 13 h à 15 h</p>
              <p>et de 20 h à 21.30 h</p>
              <p>Fermé le lundi et le dimanche</p>
              <p>andorralallotja@gmail.com</p>
              <br>
              <p><a href="#">@la_llotja_andorra</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('img/participants/peixateria-la-llotja/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('img/participants/peixateria-la-llotja/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/peixateria-la-llotja/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/peixateria-la-llotja/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/peixateria-la-llotja/05.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>