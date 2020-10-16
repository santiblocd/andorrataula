<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Plat'in</title>
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
          <li><a href="es/participantes/restaurant-platin.php">ES</a></li>
          <li><a href="fr/participants/restaurant-platin.php">FR</a></li>
          <li><a href="participants/restaurant-platin.php">CA</a></li>
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
              <h2>Restaurant Plat'in</h2>
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
                    <li>Cruixent de peus de porc<br>de raça Duroc amb cargols, mesclum<br>i pèsols negres de Can Sona</li>
                    —<br>
                    <li>Tricorni de bacallà i ceps,<br>cremós de cibulet i fonoll de muntanya</li>
                    —<br>
                    <li>Parmentier amb xai de Llumeneres<br>confitat amb romaní</li>
                    —<br>
                    <li>Torró, gelat, taronja i xarop d’anet</li>
                    -<br>
                    <li>Pastís soufflé de formatge fresc<br>de Can Raubert i salsa de berbena</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>36 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú junior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Ravioli de gambes, salsa de ceps i estragó</li>
                    —<br>
                    <li>Onglet de bou a la brasa, verduretes<br>i patates rostides de les valls</li>
                    —<br>
                    <li>Profiteroles amb melilot i xocolata calenta</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>18 €</p>
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
              <a href="https://www.plat-in.net" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Bonaventura Riberaigua, 8 · Andorra la Vella</p>
              <p>(+376) 861 001</p>
              <p>De dilluns a dissabte, de 13 h a 15.30 h</p>
              <p>i de 20 h a 22.30 h</p>
              <p>Dilluns nit i diumenge, tancat
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