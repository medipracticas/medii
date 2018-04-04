<?php 
	if ($modulo != '' && $accion == '') {
		include("paneles/vista_general.php");
	}
	if ($accion =="agregar_apartado") {
		include("paneles/agregar_apartado.php");
	}

?>