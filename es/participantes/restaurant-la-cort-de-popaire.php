<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant La Cort de Popaire</title>
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
          <li><a href="es/participantes/restaurant-la-cort-de-popaire.php">ES</a></li>
          <li><a href="fr/participants/restaurant-la-cort-de-popaire.php">FR</a></li>
          <li><a href="participants/restaurant-la-cort-de-popaire.php">CA</a></li>
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
              <h2>Restaurant<br>La Cort de Popaire</h2>
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
                    <li>Cheesecake de trucha ahumada<br>con eneldo y mostaza</li>
                    —<br>
                    <li>Gyozas andorranas con donja<br>butifarra negra y trinxat</li>
                    —<br>
                    <li>Salmón con hinojo confitado<br>y reducción de Ratafia de la Carmeta</li>
                    —<br>
                    <li>Magret de pato a la brasa<br>con patatas fritas de membrillo</li>
                    —<br>
                    <li>Brownie de chocolate e higos<br>con coulis de macarulla</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>35 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú junior</h4>
                  <ul>
                    <li>Aperitvo Andorra a Taula</li>
                    —<br>
                    <li>Croquetas de ceps o pollo<br>con ensalada variada</li>
                    —<br>
                    <li>Butifarra a la brasa<br>con patatas fritas y verduras</li>
                    —<br>
                    <li>Brownie de chocolate<br>con helado de vainilla</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>15 €</p>
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
              <a href="mailto:lacortdepopaire@andorra.ad" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Plaça del poble · Soldeu</p>
              <p>(+376) 851 211</p>
              <p> De jueves a domingo, de 13 h a 15 h</p>
              <p>y de 20 h a 22 h</p>
              <p>Lunes, martes y miércoles, cerrado</p>
              <p>lacortdepopaire@andorra.ad</p>
              <br>
              <p><a href="#">@lacortdepopaire</a></p>
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