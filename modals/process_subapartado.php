<?php  
  include("../funciones.php");
  $subapartado = sanitizar("subapartado");
  $id_apartado = sanitizar("id_apartado");

  if ($subapartado != '') {
      $consulta_val = consulta_val("SELECT null FROM subapartados WHERE id_apartado = '$id_apartado' and subapartado = '$subapartado'");
      if ($consulta_val == '') {
        $insertar = consulta_gen("INSERT INTO subapartados(id_apartado,subapartado,texto_borrador,texto_limpio,posicion) values('$id_apartado','$subapartado','','','0')");
        echo "insertar";
      }
      else{
        echo "El subapartado ya ha sido registrado con anterioridad";
      }
  }
  else{
      echo "<br>Campo vacio en el formulario";
  }


?>