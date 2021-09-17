<?php 
	$nombreBase2=basename($_FILES["archivoImg"]["name"]);
	$nombreFinal2=date("m-d-y"). "-". date("H-i-s"). "-". $nombreBase2;
	$ruta2='../img/imagenesUsuarios/importadas/'.$nombreFinal2;
	$subirArchivo2=move_uploaded_file($_FILES["archivoImg"]["tmp_name"],$ruta2);
	echo $nombreFinal2;
?>