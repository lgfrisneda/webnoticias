<?php

  $headerpag = headerPáginas();
  $rrss = redesSociales();
  $bancabe = bannerCab();
  $logo = logo();
  $menu = menuCat();

?>

  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <?php
          foreach($headerpag as $headpag){
        ?>
        <a class="p-2 text-muted" href="<?php echo ($headpag['id'] == 1)? "nosotros.php": "contacto.php";?>"><?php echo $headpag['nombre'];?></a>
        <?php
          }
        ?>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="index.php">TITULO</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        <?php if(sizeof($rrss) > 0){?>
          <?php
            foreach($rrss as $rsc){
          ?>
            <a href="<?php echo $rsc['url'];?>">
              <i class="<?php echo $rsc['nombre'];?>"></i>
            </a>
          <?php
            }
          }
          ?>
      </div>
    </div>
  </header>
  <?php
    foreach($bancabe as $bancab){
  ?>

  <div class="container">

    <a href="<?php echo $bancab['url'];?>"><img src="<?php echo $bancab['imagen'];?>" alt="Cabecera" style="width: 100%;height: auto;"></a> <!-- mejor 1068 x 250 px -->

  </div><!-- container -->

  <?php
    }
  ?>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php
        foreach($menu as $catmenu){
      ?>
      <a class="p-2 text-muted" href="categoria.php?categoria=<?php echo $catmenu['id'];?>"><?php echo $catmenu['nombre'];?></a>
      <?php
        }
      ?>
    </nav>
  </div>