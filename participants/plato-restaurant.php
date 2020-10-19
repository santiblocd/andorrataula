<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Plató Restaurant</title>
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
          <li><a href="es/participantes/plato-restaurant.php">ES</a></li>
          <li><a href="fr/participants/plato-restaurant.php">FR</a></li>
          <li><a href="participants/plato-restaurant.php">CA</a></li>
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
              <h2>Plató Restaurant</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú gastronòmic</h4>
                  <ul>
                    <li>Coca de recapte amb sardina fumada<br>acompanyada d'una Inedit Damm</li>
                    —<br>
                    <li>Amanida del Périgord, pedrers d’ànec saltats,<br>bacó, panses, pinyons i pernil ibèric</li>
                    —<br>
                    <li>Brou d’escudella<br>amb galets farcits de carn d’olla</li>
                    —<br>
                    <li>Bacallà cuit a baixa temperatura,<br>tomàquet confitat i xips de carbassó</li>
                    —<br>
                    <li>Secret ibèric a la brasa amb patates palla</li>
                    -<br>
                    <li>Lingot d’or amb gelat de cacauet salat</li>
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
                    <li>Croquetes casonales de pollastre de pagès</li>
                    —<br>
                    <li>Brou d’escudella<br>amb galets farcits de carn d’olla</li>
                    —<br>
                    <li>Secret ibèric a la brasa<br>amb patates palla</li>
                    —<br>
                    <li>Lingot d’or amb gelat de cacauet salat</li>
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
              <a href="https://www.hotel-arthotelandorra.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Part de la Creu, 12-25 · Andorra la Vella</p>
              <p>(+376) 760 303</p>
              <p>De dilluns a diumenge, de 13.30 h a 15.30 h</p>
              <p>i de 20 h a 23 h</p>
              <p>arthotel@andorra.ad</p>
              <br>
              <p><a href="https://www.hotel-arthotelandorra.com">www.hotel-arthotelandorra.com</a></p>
              <p><a href="#">@platorestaurant</a></p>
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