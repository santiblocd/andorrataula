<!DOCTYPE html>
<html lang="ca" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Restaurant Don Denis</title>
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
          <li><a href="es/participantes/restaurant-don-denis.php">ES</a></li>
          <li><a href="fr/participants/restaurant-don-denis.php">FR</a></li>
          <li><a href="participants/restaurant-don-denis.php">CA</a></li>
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
              <h2>Restaurant Don Denis</h2>
            </div>
            <!-- FIN BLOQUE RESTAURANTE > TITULO -->
            <div class="info-restaurant">
              <div class="info-menu">
                <!-- START MENU > TIPO MENU 1 -->
                <div class="menu">
                  <h4>Menú tradicional</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula<br>acompanyat d'una Inedit Damm</li>
                    —<br>
                    <li>Amanida de pedrers, foie-gras<br>i confit d’ànec amb figues<br> o <br>Canelons de melós de vedella i ceps</li>
                    —<br>
                    <li>Magret d’ànec<br>amb poma caramel•litzada i suc<br> o <br>Escamarlans saltats amb ou,<br>patates i pebrots de Padrón</li>
                    —<br>
                    <li>Cheesecake sobre pa de pessic<br>de pastanaga<br> o <br>Mousse de llimona àcida</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>36 €</p>
                  <span>per persona</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menú júnior</h4>
                  <ul>
                    <li>Aperitiu Andorra a Taula</li>
                    —<br>
                    <li>Canelons de melós de vedella i ceps</li>
                    —<br>
                    <li>Filet de turbot a la planxa</li>
                    —<br>
                    <li>Crep de sucre o de Nutella</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>19 €</p>
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
              <a href="https://www.dondenis.com" target="_blank">Fes la teva <br>reserva</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Isabelle Sandy, 3 · Escaldes-Engordany</p>
              <p>(+376) 820 692</p>
              <p> De dilluns a diumenge, de 12.30 h a 16 h</p>
              <p>i de 19.30 h a 23 h</p>
              <p>restaurantdondenis@andorra.ad</p>
              <br>
              <p><a href="https://www.dondenis.com/">www.dondenis.com</a></p>
              <p><a href="#">@restaurantdondenis</a></p>
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