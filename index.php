<?php

  require 'funciones.php';
  
  $categorias = categorias();

?>
<!doctype html>
<html lang="es">
  <head>
    <?php include "head.php";?>
  </head>
  <body>
    <div class="container">
      <?php include "header.php";?>
      <?php include "panel.php";?>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <?php foreach($categorias as $categoria){?>
            <h3 class="pb-4 mb-4 font-italic border-bottom">
              <?php echo strtoupper($categoria['nombre']);?>
            </h3>

            <div class="blog-post">

              <?php foreach(noticiasCate($categoria['id'], '0') as $notcatsec){?>
      	  
              <div class="col-md-12">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?php echo nombCat($notcatsec['id_categoria'])?></strong>
                    <h4 class="mb-0"><?php echo $notcatsec['titulo']?></h4>
                    <div class="mb-1 text-muted"><?php echo $notcatsec['fecha_pub']?></div>
                    <a href="articulo.php?articulo=<?php echo $notcatsec['id']?>" class="stretched-link">Leer</a>
                  </div>
                  <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="<?php echo $notcatsec['img_cabecera']?>" focusable="false" role="img">
                  </div>
                </div>
              </div>
      	  	<?php } ?>
              <div class="container">
                <a class="btn btn-lg btn-block btn-outline-secondary" href="categoria.php?categoria=<?php echo $categoria['id'];?>">MAS DE <?php echo strtoupper($categoria['nombre']);?></a>
              </div>
              <br>
              <?php foreach(banner("CAT".$categoria['id']) as $bancat){?>
                <div class="container">
                  <a href="<?php echo $bancat['url'];?>"><img src="<?php echo $bancat['imagen'];?>" alt="Cabecera" style="width: 100%;height: auto;"></a> <!-- mejor 1068 x 250 px -->
                </div>
              <?php } ?>

            </div><!-- /.blog-post -->
            
          <?php } ?>

        </div><!-- /.blog-main -->

        <?php include "sidebar.php";?>

      </div><!-- /.row -->

    </main><!-- /.container -->

  <?php include "footer.php";?>
  </body>
</html>
