<!DOCTYPE html>
<html lang="es" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <!-- title --> <title>Pizzeria Restaurant Angelo La Massana</title> <!-- END title -->
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
          <li><a href="../es/participantes/pizzeria-restaurant-angelo-la-massana.php">ES</a></li>
          <li><a href="../fr/participants/pizzeria-restaurant-angelo-la-massana.php">FR</a></li>
          <li><a href="../participants/pizzeria-restaurant-angelo-la-massana.php">CA</a></li>
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
              <h2>Pizzeria Restaurant<br>Angelo La Massana</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú gastronómico</h4>
                  <ul>
                    <li>Croqueta de butifarra negra con manzana y queso<br>de cabra acompañada de una INEDIT de Damm</li>
                    —<br>
                    <li>Crema de calabaza con trocitos de castaña<br>a la sal y virutas de jamón de cerdo de raza bísara</li>
                    —<br>
                    <li>Tartar de atún y aguacate<br>con vinagreta de cítricos</li>
                    —<br>
                    <li>Risotto de setas de Burdeos de temporada</li>
                    —<br>
                    <li>Picaña al grill con emulsión<br>de patata y parmesano</li>
                    —<br>
                    <li>Requesón y miel orgánica con compota de manzana,<br>pera y crumble de nueces</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>30 €</p>
                  <span>por persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
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
              <p>Av. Sant Antoni, 22 · La Massana</p>
              <p>(+376) 738 393</p>
              <p> De lunes a domingo, de 13 h a 15.30 h</p>
              <p>y de 20 h a 23 h</p>
              <p>administracio@grupkanalla.com</p>
              <br>
              <p><a href="https://www.pizzeriaangelo.restaurant/">www.pizzeriaangelo.restaurant</a></p>
              <p><a href="#">@angelo.massana</a></p>
            </div>
          </div>
          <!-- END LEGAL + DIRECCIÓN -->
        </div>
        </div>

        <!-- START IMÁGENES LINKS -->
        <div class="gallery">
          <div class="slide" style="background-image: url('../img/participants/pizzeria-restaurant-angelo-la-massana/01.jpg')"><div class="tipomenu">Menú Junior</div></div>
          <div class="slide" style="background-image: url('../img/participants/pizzeria-restaurant-angelo-la-massana/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/pizzeria-restaurant-angelo-la-massana/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/pizzeria-restaurant-angelo-la-massana/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/pizzeria-restaurant-angelo-la-massana/05.jpg')"></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>