<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
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
          <li><a href="es/participantes/odetti-bistro.php">ES</a></li>
          <li><a href="fr/participants/odetti-bistro.php">FR</a></li>
          <li><a href="participants/odetti-bistro.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="http://localhost/andorra">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en familia</span></h1>
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
                  <h4>Menú gastronómico</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula<br>acompañado de una INEDIT de Damm</li>
                    —<br>
                    <li>Ensalada tibia de mollejas<br>con setas y piñones</li>
                    —<br>
                    <li>Crema de patatas de Andorra<br>con mosaico vegetal</li>
                    —<br>
                    <li>Morro de bacalao<br>con escalivada tricolor de pimientos</li>
                    —<br>
                    <li>Canelón del Maestro Toni<br>con bechamel trufada</li>
                    —<br>
                    <li>Coulant de chocolate<br>con helado de vainilla de Tahití</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>37 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula</li>
                    —<br>
                    <li>Escudella con fideos y albondiguillas</li>
                    —<br>
                    <li>Canelones gratinados</li>
                    —<br>
                    <li>Yogur artesano<br>con coulis de frutos rojos</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>18 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 2 -->
            </div>
          </div>

          <!-- START LEGAL + DIRECCIÓN -->
          <div class="info-restaurant">
            <div class="direccion">
              <p>IGI incluido • Bebidas no incluidas</p>
            </div>
             <div class="boton">
              <a href="mailto:toska.andorra2018@gmail.com" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Santa Anna, 14 · Escaldes-Engordany</p>
              <p>(+376) 807 575</p>
              <p>De lunes a domingo, de 13 h a 15.30 h</p>
              <p>y de 20 h a 22.30 h</p>
              <p>Miércoles, cerrado
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
          <div class="slide" style="background-image: url('img/participants/andorra-park-hotel-restaurant-es/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide">your 2</div>
          <div class="slide">your 3</div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>