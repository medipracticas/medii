<?php  
	include("../funciones.php");
	$id_subapartado = sanitizar_get("id_subapartado");
	echo $texto = consulta_txt("SELECT texto_borrador FROM subapartados WHERE id_subapartado = '$id_subapartado'","texto_borrador");
?>