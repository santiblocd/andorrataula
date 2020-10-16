<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Carroi</title>
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
          <li><a href="es/participantes/restaurant-carroi.php">ES</a></li>
          <li><a href="fr/participants/restaurant-carroi.php">FR</a></li>
          <li><a href="participants/restaurant-carroi.php">CA</a></li>
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
              <h2>Restaurant Carroi</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Fuet d’Andorra de Cal Jordi<br>acompanyada d’una Inedit Damm</li>
                    —<br>
                    <li>Amanida de salmó marinat, poma verda<br>vinagreta de fruites vermelles i pebre de Sichuan<br> o <br>Crema de carbassa amb ametlles<br>i aire de pernil ibèric</li>
                    —<br>
                    <li>Llom de bacallà confitat amb saltat de col xinesa,<br>gírgoles i salsa suau d’all<br> o <br>Botifarra d’Andorra de Cal Jordi<br>amb puré trufat, ou escalfat, foie-gras<br>i caramel de vi</li>
                    —<br>
                    <li>Macedònia de fruita amb coriandre<br>i sorbet de meló Cantaloup</li>
                    -<br>
                  </ul>
                </div>
                <div class="preu">
                  <p>30 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú junior</h4>
                  <ul>
                    <li>Fuet d’Andorra de Cal Jordi</li>
                    —<br>
                    <li>Cues de llagostins arrebossades<br>i amanida</li>
                    —<br>
                    <li>Hamburguesa de vedella d’Andorra al grill<br>amb puré de patata i juliana de pernil ibèric</li>
                    —<br>
                    <li>Macedònia</li>
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
              <a href="https://www.abbaxaletsuiteshotel.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Terra Major s/n · Sispony (La Massana)</p>
              <p>((+376) 737 300</p>
              <p> De dilluns a diumenge, de 13 h a 15.30 h</p>
              <p>i de 20.30 h a 22.30 h</p>
              <p>xaletsuites@abbahotels.com</p>
              <br>
              <p><a href="https://www.abbaxaletsuiteshotel.com">www.abbaxaletsuiteshotel.com</a></p>
              <p><a href="#">@abbaxaletsuites</a></p>
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