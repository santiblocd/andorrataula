<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula 2020 - Restaurant Isard</title>
    <?php include dirname(__FILE__).'/../template-parts/head.html'; ?>
    <meta name="description" content="Descubre el menú gastronómico del Restaurant Isard para Andorra a Taula 2020 y degusta sus especialidades acompañadas de una cerveza INEDIT de Damm."/>
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
          <li><a href="../es/participantes/restaurant-isard.php">ES</a></li>
          <li><a href="../fr/participants/restaurant-isard.php">FR</a></li>
          <li><a href="../participants/restaurant-isard.php">CA</a></li>
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
              <h2>Restaurant Isard</h2>
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
                    <li>Puerros y calabaza confitados<br>con dashi y caviar de trucha</li>
                    —<br>
                    <li>Boletus con tocino y chicharrones</li>
                    —<br>
                    <li>Calamares rellenos de butifarra<br>sobre crema de cangrejo de río</li>
                    —<br>
                    <li>Rabo de buey deshuesado con Ratassia<br>y trompetas de la muerte</li>
                    —<br>
                    <li>Tarta Tatin de caqui<br>con helado de hierba luisa</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>32 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitivo Andorra a Taula</li>
                    —<br>
                    <li>Macarrones gratinados</li>
                    —<br>
                    <li>Libritos de lomo<br>con queso y jamon dulce</li>
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
              <a href="mailto:reserves@hotelisard.com" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. Meritxell, 34 · Andorra la Vella</p>
              <p>(+376) 876 800</p>
              <p>De lunes a domingo, de 13 h a 15.30 h</p>
              <p>y de 20 h a 22.30 h</p>
              <p>reserves@hotelisard.com</p>
              <br>
              <p><a href="https://www.hotelisard.com/">www.hotelisard.com</a></p>
              <p><a href="#">@isardandorra</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/01.jpg')"><div class="tipomenu">Menú gastronómico</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-isard/05.jpg')"><span class="legal">INEDIT Damm recomienda el consumo responsable. Alc. 4,8º</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>