<div class="box-body no-padding" style="margin:-10px">
  <div class="mailbox-read-info">
    <h2 style="margin-top:8px"><?php echo $apartado_name ?> </h2> 
    <i>Recopilador</i> 
  </div> 
                            
  <div class="mailbox-read-message">  
    <?php 
        $consulta_sub_reco = mysqli_query($q_sec,"SELECT id_subapartado,subapartado,texto_borrador FROM subapartados WHERE id_apartado = '$id_apartado'");
        while ($array = mysqli_fetch_array($consulta_sub_reco)) {
            $id_subapartado = $array["id_subapartado"];
            $subapartado    = $array["subapartado"];
            $texto_borrador = $array["texto_borrador"];
            echo "<h4>$subapartado</h4>";
            echo "$texto_borrador";
        }
    ?>                            
  </div>
</div>