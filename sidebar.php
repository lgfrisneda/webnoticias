<?php 
  $ultnoticias = ultimasNoticias();
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v4.0"></script>
  <aside class="col-md-4 blog-sidebar">

    <div class="p-4 mb-3 bg-light rounded">
      <?php foreach(widgetsLat("LATAR") as $widlatar){?>
      <h4 class="pb-4 font-italic border-bottom"><?php echo $widlatar['nombre'];?></h4>
      <div align="center">
              <?php echo html_entity_decode($widlatar['html']);?>
            </div>
      <br>
      <?php } ?>
    </div>
	  
	  <div class="p-4 mb-3 bg-light rounded">
      <?php foreach(bannerLat("LATAR") as $banlatar){?>
        <a href="<?php echo $banlatar['url']?>"> <img width="100%" src="<?php echo $banlatar['imagen']?>" alt="<?php echo $banlatar['posicion']?>"></a>
        <br>
        <br>  
        <?php } ?>
    </div>
	  
	  <div class="p-4 mb-3 bg-light rounded">
        <h4 class="pb-4 font-italic border-bottom">ULTIMAS NOTICIAS</h4>
        <?php foreach($ultnoticias as $ultnot){?>
        <div class="col-md-12">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary"><?php echo nombCat($ultnot['id_categoria'])?></strong>
              <h5 class="mb-0"><?php echo $ultnot['titulo']?></h5>
              <div class="mb-1 text-muted"><?php echo $ultnot['fecha_pub']?></div>
              <a href="articulo.php?articulo=<?php echo $ultnot['id']?>" class="stretched-link">Leer...</a>
            </div>
          </div>
        </div>
        <?php } ?>  
    </div>

    <div class="p-4 mb-3 bg-light rounded">
      <?php foreach(widgetsLat("LATAB") as $widlatab){?>
      <h4 class="pb-4 font-italic border-bottom"><?php echo $widlatab['nombre'];?></h4>
      <div align="center">
              <?php echo html_entity_decode($widlatab['html']);?>
            </div>
      <br>
      <?php } ?>
    </div>
    
    <div class="p-4 mb-3 bg-light rounded">
      <?php foreach(bannerLat("LATAB") as $banlatab){?>
        <a href="<?php echo $banlatab['url']?>"> <img width="100%" src="<?php echo $banlatab['imagen']?>" alt="<?php echo $banlatab['posicion']?>"></a>
        <br>
        <br>  
        <?php } ?>
    </div>

  </aside><!-- /.blog-sidebar -->