<?php  
  include("../funciones.php");
  #variables
  $subapartado = sanitizar_get("subapartado");
  $id_subapartado = sanitizar_get("id_subapartado");

  $id_apartado = consulta_txt("SELECT id_apartado FROM subapartados WHERE id_subapartado = '$id_subapartado'","id_apartado");

  if ($subapartado != '') {
     
    //$consulta_val = consulta_val("SELECT null FROM subapartados WHERE id_apartado = '$id_apartado' and subapartado = '$subapartado'");
     $cambiar = consulta_gen("UPDATE subapartados SET subapartado = '$subapartado' WHERE id_subapartado='$id_subapartado'");
     echo $subapartado;
      /*if ($consulta_val == 0) {
          $cambiar = consulta_gen("UPDATE subapartados SET subapartado = '$subapartado' WHERE id_subapartado='$id_subapartado'");
          echo "cambio";
      }
      else{
          echo "Registro ya hecho con anterioridad";
      }*/
  }
  else{
      echo "vacio";
  }


?>