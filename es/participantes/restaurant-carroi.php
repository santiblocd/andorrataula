<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
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
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en familia</span></h1>
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
                    <li>Fuet de Andorra de Cal Jordi<br>acompañado de una Inedit Damm</li>
                    —<br>
                    <li>Ensalada de salmón marinado, manzana verde,<br>vinagreta de frutos rojos y pimienta de Sichuan<br> o <br>Crema de calabaza con almendras<br>y aire de jamón ibérico</li>
                    —<br>
                    <li>Lomo de bacalao confitado con salteado de col china,<br>setas de cardo y salsa suave de ajo<br> o <br>Butifarra de Andorra de Cal Jordi<br>con puré trufado, huevo escalfado, foie gras<br>y caramelo de vino</li>
                    —<br>
                    <li>Macedonia de frutas con cilantro<br>y sorbete de melón Cantaloup</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>30 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú junior</h4>
                  <ul>
                    <li>Fuet de Andorra de Cal Jordi</li>
                    —<br>
                    <li>Colas de langostinos rebozadas<br>y ensalada</li>
                    —<br>
                    <li>Hamburguesa de ternera de Andorra al grill<br>con puré de patatas y juliana de jamón ibérico</li>
                    —<br>
                    <li>Macedonia</li>
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
              <p>IGI incluido • Bebidas no inlcuidas</p>
            </div>
             <div class="boton">
              <a href="https://www.abbaxaletsuiteshotel.com" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Terra Major s/n · Sispony (La Massana)</p>
              <p>(+376) 737 300</p>
              <p> De lunes a domingo, de 13 h a 15.30 h</p>
              <p>y de 20.30 h a 22.30 h</p>
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