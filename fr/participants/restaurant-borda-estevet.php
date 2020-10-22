<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Borda Estevet</title>
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
          <li><a href="es/participantes/restaurant-borda-estevet.php">ES</a></li>
          <li><a href="fr/participants/restaurant-borda-estevet.php">FR</a></li>
          <li><a href="participants/restaurant-borda-estevet.php">CA</a></li>
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
              <h2>Restaurant Borda Estevet</h2>
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
                    <li>Coliflor de muntanya gratinada<br>amb beixamel d’ibèric i encenalls de fetge<br>d’ànec semicuit</li>
                    —<br>
                    <li>Sashimi de salmó sobre cruixent<br>d’algues wakame i maionesa de soja</li>
                    —<br>
                    <li>Magret d’ànec, ceps i foie poêlé</li>
                    —<br>
                    <li>Turbot amb bolets de temporada,<br> fruita seca i vinagreta dolça</li>
                    —<br>
                    <li>Tiramisú<br> o <br>Batut de mango<br>amb coulant de xocolata i gelat de gerds</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>35 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Espaguetis a la carbonara</li>
                    —<br>
                    <li>Cuixa de pollastre a la brasa<br>amb patates fregides</li>
                    —<br>
                    <li>Flam de la casa<br> o <br>Gelats variats</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>17 €</p>
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
              <a href="mailto:gruptriomf@mail.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Crta. de la Comella, 2 · Andorra la Vella</p>
              <p>(+376) 864 026</p>
              <p> De dimarts a diumenge, de 13 h a 16 h</p>
              <p>i de 20 h a 23 h</p>
              <p>Diumenge nit, tancat</p>
              <p>gruptriomf@gmail.com</p>
              <br>
              <p><a href="#">@bordaestevet</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('img/participants/restaurant-borda-estevet/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-borda-estevet/02.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-borda-estevet/03.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-borda-estevet/04.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-borda-estevet/05.jpg')"></div>
          <div class="slide" style="background-image: url('img/participants/restaurant-borda-estevet/06.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>