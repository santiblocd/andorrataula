<!DOCTYPE html>
<html lang="fr" class="ficha-restaurante">
  <head>
    <meta charset="utf-8">
    <title>Anorra a Taula 2020 - Restaurant Plat'in</title>
    <?php include dirname(__FILE__).'/../template-parts/head.html'; ?>
    <meta name="description" content="Découvrez le menu gastronomique du Restaurant Plat’in pour Andorra a Taula 2020 et dégustez ses spécialités accompagnées d'une bière INEDIT de Damm."/>
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
        <a class="circletopo" href="../fr">
          <div class="circle titulo">
            <div class="circle titulo">
              <h1><span class="minus">Andorre</span><span><img src="../img/taula.svg"></span> <span class="mayus">en famille</span></h1>
            </div>
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
                  <h4>Menu gastronomique</h4>
                  <ul>
                    <li>Amuse-bouche Andorra a Taula<br>servi avec une bière INEDIT Damm</li>
                    —<br>
                    <li>CCroustillant de pieds de porc<br>de la race Duroc et escargots, salade mesclun<br>et pois noirs de Can Sona</li>
                    —<br>
                    <li>Trio de morue et champignons,<br>crémeux de ciboulette et fenouil des montagnes</li>
                    —<br>
                    <li>Parmentier et agneau de Llumeneres<br>confit assaisonné au romarin</li>
                    —<br>
                    <li>Touron, glace, orange arrosé<br>de sirop d’aneth</li>
                    —<br>
                    <li>Soufflé au fromage blanc de Can Raubert<br>et sauce à la verveine</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>36 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 1 -->

                <!-- START MENU > TIPO MENU 2 -->
                <div class="menu">
                  <h4>Menu enfant</h4>
                  <ul>
                    <li>Amuse-gueule Andorra a Taula</li>
                    —<br>
                    <li>Ravioli de crevettes,<br>sauce aux cèpes et à l’estragon</li>
                    —<br>
                    <li>Onglet de bœuf cuit au feu de bois,<br>légumes et pommes de terre du terroir rôties</li>
                    —<br>
                    <li>PProfiteroles au mélilot<br>arrosés de chocolat chaud</li>
                  </ul>
                </div>
                <div class="preu">
                  <p>18 €</p>
                  <span>par personne</span>
                </div>
                <!-- FIN MENU > TIPO MENU 2 -->
            </div>
          </div>

          <!-- START LEGAL + DIRECCIÓN -->
          <div class="info-restaurant">
            <div class="direccion">
              <p>TTC • Boissons non comprises</p>
            </div>
             <div class="boton">
              <a href="https://www.plat-in.net" target="_blank">Faites votre<br>réservation</a>
              <!-- SI ES UN MAIL PONER EN HREF MAILTO, EJEMPLO: <a href="mailto:xxxxxx@mail.com">Fes la teva <br>reserva</a>-->
            </div>
            <div class="direccion">
              <p>C. Bonaventura Riberaigua, 8 · Andorra la Vella</p>
              <p>(+376) 861 001</p>
              <p>Du lundi au samedi, de 13 h à 15.30 h</p>
              <p>et de 20 h a 22.30 h</p>
              <p>Fermé le lundi soir et le dimanche</p>
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
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/01.jpg')"><div class="tipomenu">Menú gastronomique</div></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/02.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/03.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/04.jpg')"></div>
          <div class="slide" style="background-image: url('../img/participants/restaurant-platin/05.jpg')"><span class="legal">La bière INEDIT Damm est à consommer avec modération. 4,8o d’alcool</span></div>
        </div>
        <!-- END IMÁGENES LINKS -->

      </div>
    </div>

    <?php include dirname(__FILE__).'/../template-parts/footer.html'; ?>
    
  </body>
</html>