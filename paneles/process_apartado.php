<?php  
	include("../funciones.php");
	$apartado = sanitizar("apartado");
	$id_modulo  = sanitizar("sistema");

	if ($apartado != '') {
			$consulta_val = consulta_val("SELECT null FROM apartados WHERE apartado = '$apartado' and id_modulo = '$id_modulo'");

			if ($consulta_val == 0) {
				$consulta_gen= consulta_gen("INSERT INTO apartados(id_modulo,apartado,posicion) values('$id_modulo','$apartado','0')");
				echo "El apartado ha sido registrado exitosamente";
			}
			else{
				echo "El apartado ya ha sido registrado con aterioridad";
			}
	}
	else{
		echo "Campo vacio en el formulario";
	}


?>
<h4>Apartados Registrados</h4>
<ul>
<?php 
    $consulta_bd = mysqli_query($q_sec,"SELECT * FROM apartados WHERE id_modulo = '$id_modulo' order by posicion asc");
    while ($array = mysqli_fetch_array($consulta_bd)) {
        $apartado = $array["apartado"];
        echo "<li>$apartado</li>";
    }
?>
</ul>