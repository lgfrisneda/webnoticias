<?php



	function conectdb(){

		$dbservidor 	= "localhost"; 

		$dbusuario 		= "root"; 	

		$dbclave	 	= ""; 		 

		$basededatos 	= "webnews"; 

		$conexion = mysqli_connect( $dbservidor, $dbusuario, $dbclave ) or die ("No se ha podido conectar al servidor de Base de datos");

		$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

		return $conexion;

	}



	function blockNone($val){

		return ($val == 1) ? "block" : "none";

	}



	function headerPáginas(){



      $headerpagreg = array();

      $resultado = mysqli_query(conectdb(), "SELECT id, nombre, mostrar FROM otras_pag WHERE mostrar = '1' ORDER BY id");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $headerpagreg[]=$row;

      }



      mysqli_free_result($resultado);

      return $headerpagreg;

	}



	function redesSociales(){



      $rrss = array();

      $resultado = mysqli_query(conectdb(), "SELECT * FROM rrss ORDER BY id");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $rrss[]=$row;

      }



      mysqli_free_result($resultado);

      return $rrss;

	}



	function bannerCab(){

	  $bancab = array();

      $resultado = mysqli_query(conectdb(), "SELECT * FROM banners WHERE posicion = 'Cabecera' AND mostrar = '1'");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $bancab[]=$row;

      }



      mysqli_free_result($resultado);

      return $bancab;

	}



	function logo(){

      $resultado = mysqli_query(conectdb(), "SELECT * FROM detalles WHERE id = '2'");

      $logo = mysqli_fetch_array($resultado);



      return $logo;

	}



	function nombreSitio(){

      $resultado = mysqli_query(conectdb(), "SELECT * FROM detalles WHERE id = '1'");

      $nomsitio = mysqli_fetch_array($resultado);



      return $nomsitio;

	}



	function icono(){

      $resultado = mysqli_query(conectdb(), "SELECT * FROM detalles WHERE id = '3'");

      $icono = mysqli_fetch_array($resultado);



      return $icono;

	}



	function menuCat(){



      $menucatreg = array();

      $resultado = mysqli_query(conectdb(), "SELECT * FROM categorias WHERE menu = '1' ORDER BY menu_orden ASC");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $menucatreg[]=$row;

      }



      mysqli_free_result($resultado);

      return $menucatreg;

	}



	function panel(){

      $resultado = mysqli_query(conectdb(), "SELECT * FROM panel_noticias WHERE mostrar = '1'");

      $panel = mysqli_fetch_array($resultado);



      return $panel;

	}



	function noticiaPrincipal(){

      $resultado = mysqli_query(conectdb(), "SELECT id, titulo, contenido, img_cabecera, 

							      	fecha_pub, id_categoria, id_usuario 

							      	FROM noticias 

							      	WHERE id_categoria <> '0' 
                                                                AND id_usuario <> '0' 

							      	ORDER BY id DESC LIMIT 1");

      $notprinc = mysqli_fetch_array($resultado);



      return $notprinc;

	}



	function noticiasSecu1($val){



      $bloque1 = array();

      $resultado = mysqli_query(conectdb(), "SELECT id, titulo, img_cabecera, 

							      	fecha_pub, id_categoria, id_usuario 

							      	FROM noticias 

							      	WHERE id_categoria <> '0' AND id <> '".$val."'
                                                                AND id_usuario <> '0'  

							      	ORDER BY id DESC LIMIT 2");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $bloque1[]=$row;

      }



      mysqli_free_result($resultado);

      return $bloque1;

	}



	function noticiasSecu2($val){



      $bloque1 = array();

      $resultado = mysqli_query(conectdb(), "SELECT id, titulo, img_cabecera, 

							      	fecha_pub, id_categoria, id_usuario 

							      	FROM noticias 

							      	WHERE id_categoria <> '0' AND id NOT IN (".$val.") 
                                                                AND id_usuario <> '0'

							      	ORDER BY id DESC LIMIT 2");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $bloque1[]=$row;

      }



      mysqli_free_result($resultado);

      return $bloque1;

	}



	function bannerPan(){

	  $bancab = array();

      $resultado = mysqli_query(conectdb(), "SELECT * FROM banners WHERE posicion = 'Despues del panel' AND mostrar = '1'");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $bancab[]=$row;

      }



      mysqli_free_result($resultado);

      return $bancab;

	}



	function categorias(){



      $categorias = array();

      $resultado = mysqli_query(conectdb(), "SELECT id, nombre FROM categorias ORDER BY id ASC");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $categorias[]=$row;

      }



      mysqli_free_result($resultado);

      return $categorias;

	}



	function noticia1Cate($id_cat){

      $resultado = mysqli_query(conectdb(), "SELECT id, titulo, img_cabecera, id_usuario, fecha_pub 

							      	FROM noticias 

							      	WHERE id_categoria = '".$id_cat."' 

							      	ORDER BY id DESC LIMIT 1");

      $notcatp = mysqli_fetch_array($resultado);



      return $notcatp;

	}



	function noticiasCate($idcat, $idnotp){



      $noticiascat = array();

      $resultado = mysqli_query(conectdb(), "SELECT id, titulo, img_cabecera, fecha_pub, id_categoria, id_usuario 

							      	FROM noticias 

							      	WHERE id_categoria = '".$idcat."' AND id <> '".$idnotp."' 

							      	ORDER BY id DESC LIMIT 3");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $noticiascat[]=$row;

      }



      mysqli_free_result($resultado);

      return $noticiascat;

	}



	function banner($pos){



      $bannercat = array();

      $resultado = mysqli_query(conectdb(), "SELECT * FROM banners WHERE posicion = '".$pos."' AND mostrar = '1' ORDER BY id ASC");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $bannercat[]=$row;

      }



      mysqli_free_result($resultado);

      return $bannercat;

	}



	function contFooter($id){

      $resultado = mysqli_query(conectdb(), "SELECT * FROM footer WHERE nombre = '".$id."'");

      $contfooter = mysqli_fetch_array($resultado);



      return $contfooter;

	}



	function bannerLat($pos){



      $bannerlat = array();

      $resultado = mysqli_query(conectdb(), "SELECT * FROM banners WHERE posicion LIKE '%".$pos."%' AND mostrar = '1' ORDER BY id ASC");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $bannerlat[]=$row;

      }



      mysqli_free_result($resultado);

      return $bannerlat;

	}



	function widgetsLat($pos){



      $widgetlat = array();

      $resultado = mysqli_query(conectdb(), "SELECT * FROM widgets WHERE posicion LIKE '%".$pos."%' ORDER BY orden ASC");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $widgetlat[]=$row;

      }



      mysqli_free_result($resultado);

      return $widgetlat;

	}



	function paginas(){

		$val = (strpos($_SERVER["REQUEST_URI"], "nosotros.php")) ? "1" : "2";

		$resultado = mysqli_query(conectdb(), "SELECT * FROM otras_pag WHERE id = '".$val."'");

      	$pagres = mysqli_fetch_array($resultado);



      return $pagres;



	}



	function ultimasNoticias(){



      $ultnoti = array();

      $resultado = mysqli_query(conectdb(), "SELECT id, titulo, img_cabecera, fecha_pub, id_categoria, id_usuario 

							      	FROM noticias 

							      	WHERE id_categoria <> '0'

							      	ORDER BY id DESC LIMIT 4");

     

      while ($row = mysqli_fetch_array($resultado)) {

        $ultnoti[]=$row;

      }



      mysqli_free_result($resultado);

      return $ultnoti;

	}



	function todoNoticiasCat(){

      $val = filter_var ( $_GET['categoria'], FILTER_SANITIZE_NUMBER_INT);

      $todonotcat = array();

      $resultado = mysqli_query(conectdb(), "SELECT id, titulo, img_cabecera, id_categoria, id_usuario,

      									fecha_pub FROM noticias 

      									WHERE id_categoria = '".$val."' 

      									ORDER BY id DESC");     

      while ($row = mysqli_fetch_array($resultado)) {

        $todonotcat[]=$row;

      }



      mysqli_free_result($resultado);

      return $todonotcat;

	}



	function nombCat($val){

		$resultado = mysqli_query(conectdb(), "SELECT nombre FROM categorias WHERE id = '".$val."'");

      	$nomcat = mysqli_fetch_array($resultado);



      return $nomcat['nombre'];

	}



	function nombUsu($val){

		$resultado = mysqli_query(conectdb(), "SELECT nombre FROM usuarios WHERE id = '".$val."'");

      	$nomusu = mysqli_fetch_array($resultado);



      return $nomusu['nombre'];

	}



	function todoNoticiasAutor(){

      $val = filter_var ( $_GET['autor'], FILTER_SANITIZE_NUMBER_INT);

      $todonotaut = array();

      $resultado = mysqli_query(conectdb(), "SELECT id, titulo, img_cabecera, id_categoria, id_usuario,

      									fecha_pub FROM noticias 

      									WHERE id_usuario = '".$val."' AND id_categoria <> '0'

      									ORDER BY id DESC");     

      while ($row = mysqli_fetch_array($resultado)) {

        $todonotaut[]=$row;

      }



      mysqli_free_result($resultado);

      return $todonotaut;

	}



	function noticia(){

      $val = filter_var ( $_GET['articulo'], FILTER_SANITIZE_NUMBER_INT);

      $resultado = mysqli_query(conectdb(), "SELECT * FROM noticias WHERE id = '".$val."'");

      $not = mysqli_fetch_array($resultado);



      return $not;

	}



?>