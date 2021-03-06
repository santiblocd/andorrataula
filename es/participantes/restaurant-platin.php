<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020 - Restaurant Plat'in</title>
    <?php include dirname(__FILE__).'/../template-parts/head.html'; ?>
    <meta name="description" content="Descubre el menú gastronómico del Restaurant Plat’in para Andorra a Taula 2020 y degusta sus especialidades acompañadas de una cerveza INEDIT de Damm."/>
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
          <li><a href="../es/participantes/restaurant-platin.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-platin.php">FR</a></li>
          <li><a href="../participants/restaurant-platin.php">CA</a></li>
        </nav>
        <!-- END Menú > cambio de idiomas -->
    	</header>
      <div class="restaurant" data-barba="container" data-barba-namespace="restaurant">
        <a class="circletopo" href="../es">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="../img/taula.svg"></span> <span class="mayus">en familia</span></h1>
          </div>
        </a>
        <div class="barra-left">
          <div class="container">
            <div class="aligner"></div>
            <!-- START BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <h2>Restaurant Plat'in</h2>
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
                    <li>Crujiente de manitas de cerdo<br>de raza Duroc con caracoles, mezclum<br>y guisantes negros de Can Sona</li>
                    —<br>
                    <li>Tricornio de bacalao y setas,<br>cremoso de cebollino e hinojo de montaña</li>
                    —<br>
                    <li>Parmentier con cordero de Llumeneres<br>confitado con romero</li>
                    —<br>
                    <li>Turrón, helado, naranja y jarabe de eneldo</li>
                    —<br>
                    <li>Tarta soufflé de queso fresco<br>de Can Raubert y salsa de verbena</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>36 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula</li>
                    —<br>
                    <li>Ravioli de gambas, salsa de boletus y estragón</li>
                    —<br>
                    <li>Onglet de buey a la brasa, verduras<br>y patatas asadas del país</li>
                    —<br>
                    <li>Profiteroles con meliloto y chocolate caliente</li>
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
              <a href="https://www.plat-in.net" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Bonaventura Riberaigua, 8 · Andorra la Vella</p>
              <p>(+376) 861 001</p>
              <p>De lunes a sábado, de 13 h a 15.30 h</p>
              <p>y de 20 h a 22.30 h</p>
              <p>Lunes noche y domingo, cerrado</p>
              <p>plat-in@plat-in.net</p>
              <br>
              <p><a href="https://www.plat-in.net">www.plat-in.net</a></p>
              <p><a href="#">@restaurante_platin</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/01.jpg')"><div class="tipomenu">Menú gastronómico</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/05.jpg')"><span class="legal">INEDIT Damm recomienda el consumo responsable. Alc. 4,8º</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>