<?php

  require 'funciones.php';

  $notisaut = todoNoticiasAutor();

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
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Autor: <?php echo nombUsu($_GET['autor']);?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-4 mb-4 font-italic border-bottom">
            Noticias de <?php echo nombUsu($_GET['autor']);?>
          </h3>

          <div class="blog-post">
            <?php foreach($notisaut as $notiaut){?>
            <div class="col-md-12">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary"><?php echo nombCat($notiaut['id_categoria']);?></strong>
                  <h4 class="mb-0"><?php echo $notiaut['titulo']?></h4>
                  <div class="mb-1 text-muted"><?php echo $notiaut['fecha_pub']?></div>
                  <a href="articulo.php?articulo=<?php echo $notiaut['id']?>" class="stretched-link">Leer</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="<?php echo $notiaut['img_cabecera'];?>" focusable="false" role="img">
                </div>
              </div>
            </div>   	
            <?php } ?>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <?php include "sidebar.php";?>

      </div><!-- /.row -->

    </main><!-- /.container -->

  <?php include "footer.php";?>
  </body>
</html>
