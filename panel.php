<?php
  $notprinc = noticiaPrincipal();
  $secubloque1 = noticiasSecu1($notprinc['id']);
  $contb1 = 1;
  $contb2 = 1;
  $idsec = "";
  $banpan = bannerPan();
  $panel = panel();
?>
    <?php /*if($panel['id'] == 1){?>
    <?php }elseif($panel['id'] == 2){?>
    <?php }elseif($panel['id'] == 3){*/?>
      <!--1 ancho 2 cortos-->
      <div class="jumbotron p-4 p-md-5 text-white rounded" style="background: url(<?php echo $notprinc['img_cabecera']?>) no-repeat center; background-size: cover; ">
        <div class="col-md-6 px-0" style="background-color: rgba(0,0,0,0.8);border-radius: 25px;">
          <h1 class="display-4 font-italic"><?php echo $notprinc['titulo']?></h1>
          <p class="lead my-3"><?php echo substr(html_entity_decode($notprinc['contenido']), 0, 150);?></p>
          <p class="lead mb-0"><a href="articulo.php?articulo=<?php echo $notprinc['id']?>" class="text-white font-weight-bold">Continuar leyendo...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <?php foreach(noticiasSecu2($notprinc['id']) as $nsb2){?>
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary"><?php echo nombCat($nsb2['id_categoria'])?></strong>
              <h3 class="mb-0"><?php echo $nsb2['titulo']?></h3>
              <div class="mb-1 text-muted"><?php echo $nsb2['fecha_pub']?></div>
              <a href="articulo.php?articulo=<?php echo $nsb2['id']?>" class="stretched-link">Leer</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img class="bd-placeholder-img" width="200" height="250" src="<?php echo $nsb2['img_cabecera']?>" focusable="false" role="img">
            </div>
          </div>
        </div>
        <?php 
          $contb2++;
        }
        ?>
      </div>
      <?php /*}*/ ?>
      <?php
          foreach($banpan as $banpanel){
      ?>
      <br>
      <div class="container" align="center">
        <a href="<?php echo $banpanel['url'];?>" ><img src="<?php echo $banpanel['imagen'];?>" style="width: 100%;height: 100px;" alt="banner2"></a> <!-- mejor 1068 x 250 px -->
      </div><!-- container -->
      <br>
      <?php
      }
      ?>