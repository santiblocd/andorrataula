<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Andorra a Taula - Mapa</title>
    <?php include "./template-parts/head.html" ?>
  </head>
  <body>

    <!-- define the wrapper and the container -->
    <div data-barba="wrapper">
    	<header>
        <?php include "./template-parts/header.html" ?>
    	</header>
      <div data-barba="container" data-barba-namespace="mapa">
        <a class="circletopo" href="http://localhost/andorra">
          <div class="circle titulo">
            <h1><span class="minus">Andorra</span><span><img src="./img/taula.svg"></span> <span class="mayus">en família</span></h1>
          </div>
        </a>
        
        <iframe style="position:absolute; top: -5%; border: none;" src="https://www.google.com/maps/d/u/0/embed?mid=1WbW2_3gntZz1FBC6OP-2fp7Dg6kdatqV&z=13" width="100%" height="120%"></iframe>
      </div>
    </div>

    <?php include "./template-parts/footer.html" ?>
    
  </body>
</html>