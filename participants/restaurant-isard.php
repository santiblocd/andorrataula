<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Isard</title>
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
          <li><a href="es/participantes/restaurant-isard.php">ES</a></li>
          <li><a href="fr/participants/restaurant-isard.php">FR</a></li>
          <li><a href="participants/restaurant-isard.php">CA</a></li>
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
              <h2>Restaurant Isard</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú gastronòmic</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula<br>acompanyat d'una Inedit Damm</li>
                    —<br>
                    <li>Porros i carbassa confitats<br>amb dashi i caviar de truita de riu</li>
                    —<br>
                    <li>Ceps amb viada i llardons</li>
                    —<br>
                    <li>Calamars farcits de botifarra<br>sobre crema de cranc de riu</li>
                    —<br>
                    <li>Cua de bou desossada amb ratassia<br>i trompetes de la mort</li>
                    —<br>
                    <li>Pastís Tatin de caqui<br>amb gelat de marialluïsa</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>32 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Macarrons gratinats</li>
                    —<br>
                    <li>Llibrets de llom<br>amb formatge i pernil dolç</li>
                    —<br>
                    <li>Brownie de xocolata<br>amb gelat de vainilla</li>
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
              <a href="mailto:reserves@hotelisard.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. Meritxell, 34 · Andorra la Vella</p>
              <p>(+376) 876 800</p>
              <p> De dilluns a diumenge, de 13 h a 15.30 h</p>
              <p>i de 20 h a 22.30 h</p>
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