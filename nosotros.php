<?php

  require 'funciones.php';

  $contentpag = paginas();

?>
<!doctype html>
<html lang="es">
  <head>
    <?php include "head.php";?>
  </head>
  <body>
    <div class="container">
      <?php include "header.php";?>
    </div>

    <main role="main" class="container">
      <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic"><?php echo $contentpag['nombre'];?></h1>
        </div>
      </div>
      <img src="<?php echo $logo['descripcion']?>" width="100%" height="auto" alt="">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <hr>
             <p><?php echo html_entity_decode($contentpag['descripcion']);?></p>
             <br>
            <hr>
          </div><!-- /.blog-post -->
          <hr>
        </div><!-- /.blog-main -->

        <?php include "sidebar.php";?>

      </div><!-- /.row -->

    </main><!-- /.container -->

  <?php include "footer.php";?>
  </body>
</html>
