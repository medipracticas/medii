<?php
	//$page= $_SERVER["REQUEST_URI"];
	//$sistema = $_GET["sistema"];

	if ($page == "/medii/" or $page == "/medii/index.php") {
		include("paneles/principal_materias.php");
	}
	if ($modulo != '') {
		include("paneles/principal_modulos.php");
	}
	
?>