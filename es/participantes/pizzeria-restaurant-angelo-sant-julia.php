<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Pizzeria Restaurant Angelo Sant Julià</title>
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
          <li><a href="es/participantes/pizzeria-restaurant-angelo-sant-julia.php">ES</a></li>
          <li><a href="fr/participants/pizzeria-restaurant-angelo-sant-julia.php">FR</a></li>
          <li><a href="participants/pizzeria-restaurant-angelo-sant-julia.php">CA</a></li>
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
              <h2>Pizzeria Restaurant<br>Angelo Sant Julià</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú gastronómico</h4>
                  <ul>
                    <li>Croqueta de butifarra negra con manzana<br>y queso de cabra acompañada de una INEDIT de Damm</li>
                    —<br>
                    <li>Sopa minestrone de verduras de temporada,<br>caldo y pasta</li>
                    —<br>
                    <li>Carpaccio de bacalao<br>sobre fondo de tomate natural,<br>espuma de pimiento del piquillo y pan pintu</li>
                    —<br>
                    <li>Raviolis rellenos de carne de ternera y verduras<br>con salsa de trufa y virutas de parmesano</li>
                    —<br>
                    <li>Presa de cerdo de raza bísara<br>con emulsión de chirivía y chimichurri de pistachos</li>
                    —<br>
                    <li>Crema sabayón gratinada de pera y almendras</li>
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
                    <li>Croqueta de jamón<br>de cerdo de raza bísara</li>
                    —<br>
                    <li>Crema de calabaza con trocitos de castaña<br>a la sal y virutas de jamón de cerdo de raza bísara</li>
                    —<br>
                    <li>Ravioli relleno de carne con salsa de tomate,<br>queso parmesano y albahaca</li>
                    —<br>
                    <li>Crep con Nutella</li>
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
              <a href="https://www.pizzeriaangelo.restaurant/" target="_blank">Haz tu<br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>Av. Rocafort, 27 · Sant Julià de Lòria</p>
              <p>(+376) 742 274</p>
              <p> De lunes a domingo, de 13 h a 15.30 h</p>
              <p>y de 20 h a 23 h</p>
              <p>administracio@grupkanalla.com</p>
              <br>
              <p><a href="https://www.pizzeriaangelo.restaurant/">www.pizzeriaangelo.restaurant</a></p>
              <p><a href="#">@angelo.santjulia</a></p>
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