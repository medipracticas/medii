<?php 
  include("../funciones.php");
  $subapartado = sanitizar("subapartado");
  $id_apartado = sanitizar("id_apartado");

  $consulta = mysqli_query($q_sec,"SELECT * FROM subapartados WHERE id_apartado = '$id_apartado'");
  while ($array = mysqli_fetch_array($consulta)) {
  	$id_subapartado = $array["id_subapartado"];
  	$subapartado     = $array["subapartado"];
  	echo "<li style='cursor:pointer;' class='subapartado_list' id='$id_subapartado'>$subapartado</li>";
  }
?>