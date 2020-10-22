<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant El Refugi Alpí</title>
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
          <li><a href="../es/participantes/restaurant-el-refugi-alpi.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-el-refugi-alpi.php">FR</a></li>
          <li><a href="../participants/restaurant-el-refugi-alpi.php">CA</a></li>
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
              <h2>Restaurant El Refugi Alpí</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula<br>acompañado de una INEDIT de Damm</li>
                    —<br>
                    <li>Trinxat de montaña a baja temperatura<br>y crujiente de panceta<br> o <br>Ensalada templada de perdiz con vinagreta</li>
                    —<br>
                    <li>Lomo de bacalao confitado<br>con alcachofas salteadas y ajos tiernos<br> o <br>Ópera de montaña:<br>espalda de cabrito con cremoso de patatas y trufa<br>acompanyada de setas de temporada</li>
                    —<br>
                    <li>Bizcocho de chocolate y nueces,<br>crema de vainilla y frutos secos<br> o <br>Crujiente de milhojas con requesón<br>y miel del Pirineo</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>39 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula</li>
                    —<br>
                    <li>Canelones de Andorra con bechamel</li>
                    —<br>
                    <li>Escalope con patatas fritas</li>
                    —<br>
                    <li>Crep a escoger</li>
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
              <a href="https://www.elrefugialpi.ad" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. Meritxell, 73 · Andorra la Vella</p>
              <p>(+376) 808 100</p>
              <p>De lunes a domingo, de 13 h a 16 h</p>
              <p>y de 20 h a 23 h</p>
              <p>elrefugialpi@elrefugialpi.ad</p>
              <br>
              <p><a href="https://www.elrefugialpi.ad">www.elrefugialpi.ad</a></p>
              <p><a href="#">@elrefugialpi</a></p>
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