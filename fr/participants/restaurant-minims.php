<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
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
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en família</span></h1>
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
                  <h4>Menú gastronòmic</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula<br>acompanyat d'una INEDIT de Damm</li>
                    —<br>
                    <li>Crema d’herbes de muntanya<br>amb donja cruixent</li>
                    —<br>
                    <li>Timbal d’escalivada<br>amb truita salmonada fumada<br>i fredolics amb vinagreta</li>
                    —<br>
                    <li>Tempura de bacallà<br>amb maionesa de codony</li>
                    —<br>
                    <li>Culatí de vedella d’Andorra<br>amb bolets saltats</li>
                    —<br>
                    <li>Bunyols de vent amb gelat de tomata<br>i xocolata 100% cacau</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>30 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Canelons de cal Calones</li>
                    —<br>
                    <li>Pollastre a l’ast amb patates xips</li>
                    —<br>
                    <li>Poma caramel•litzada</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>15 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 2 -->
            </div>
          </div>

          <!-- START LEGAL + DIRECCIÓN -->
          <div class="info-restaurant">
            <div class="direccion">
              <p>IGI inclòs • Begudes no incloses</p>
            </div>
             <div class="boton">
              <a href="mailto:minims@live.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Antic Carrer Major, 5 · Andorra la Vella</p>
              <p>(+376) 867 511</p>
              <p>De dimarts a dissabte, de 13 h a 15.30 h</p>
              <p>i de 20.30 h a 22.45 h</p>
              <p>Dilluns i diumenge, tancat</p>
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