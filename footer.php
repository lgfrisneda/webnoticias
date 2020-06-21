<?php
	$footg = mysqli_query(conectdb(), "SELECT * FROM footer WHERE id = '1' AND mostrar = '1'");
	$fgra = mysqli_fetch_array($footg);
	$footp = mysqli_query(conectdb(), "SELECT * FROM footer WHERE id = '2' AND mostrar = '1'");
	$fpeq = mysqli_fetch_array($footp);

	if((mysqli_num_rows($footg)) > 0 || (mysqli_num_rows($footp)) > 0){

			$contfg = contFooter($fgra['id']);
			$contfp = contFooter($fpeq['id']);
?>
	<footer class="blog-footer">
		<?php if(mysqli_num_rows($footg) > 0){?>
	  		<img src="<?php echo $contfg['img_fondo'];?>" style="width: 120px;height: 100%;">
	  		<p><?php echo html_entity_decode($contfg['descripcion']);?></p>
	  		<?php if(sizeof($rrss) > 0){?>
	  			<b>Redes Sociales:</b>
	  			<?php
				    foreach($rrss as $rsc){
				?>
				<a href="<?php echo $rsc['url'];?>">
	              <i class="<?php echo $rsc['nombre'];?>"></i>
	            </a>
	            <?php } ?>
	        <?php }?>
		<?php } ?>

		<?php 
	  	if(mysqli_num_rows($footp)  > 0){
			echo html_entity_decode($contfp['descripcion']);
	  	} 
	  	?>
	</footer>
<?php } ?>