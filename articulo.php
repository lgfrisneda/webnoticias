<?php

  require 'funciones.php';

  $noticia = noticia();

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
          <h1 class="display-4 font-italic"><?php echo $noticia['titulo']?></h1>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Comparte la noticia</a> 
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F<?php echo $_SERVER['SERVER_NAME'];;?>%2Fwebnews%2Farticulo.php%3Farticulo%3D<?php echo $_GET['articulo']?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="ion-social-facebook"></i></a>

              <a href="whatsapp://send?text=<?php echo "https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" data-action="share/whatsapp/share"><i class="ion-social-whatsapp"></i></a>
          </p>
        </div>
      </div>
      <img src="<?php echo $noticia['img_cabecera']?>" width="100%" height="auto" alt="<?php echo $noticia['titulo']?>">
      <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <hr>
             <p><a href="autor.php?autor=<?php echo $noticia['id_usuario'];?>"><b><?php echo nombUsu($noticia['id_usuario']);?> </b></a> - <?php echo $noticia['fecha_pub'];?> <?php echo $mod = (!empty($noticia['fecha_mod']))? " - Modificado el ".$noticia['fecha_mod']: "";?></p>
             <p><?php echo html_entity_decode($noticia['contenido']);?></p>
             <br>
             <center><p><?php echo html_entity_decode($noticia['otros']);?></p></center>
            <hr>
          </div><!-- /.blog-post -->
          <hr>
          <h3>Te puede interesar</h3>
          <hr>
          <div class="row mb-2">
            <?php foreach(noticiasSecu1($_GET['articulo']) as $notint){?>
              <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?php echo nombCat($notint['id_categoria']);?></strong>
                    <h3 class="mb-0"><?php echo $notint['titulo']?></h3>
                    <div class="mb-1 text-muted"><?php echo $notint['fecha_pub']?></div>
                    <a href="articulo.php?articulo=<?php echo $notint['id']?>" class="stretched-link">Leer</a>
                  </div>
                  
                </div>
              </div>
              <?php } ?>
            </div>
        </div><!-- /.blog-main -->

        <?php include "sidebar.php";?>

      </div><!-- /.row -->

    </main><!-- /.container -->

  <?php include "footer.php";?>
  </body>
</html>
