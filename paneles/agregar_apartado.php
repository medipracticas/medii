<div class="box-header with-border">
  <h3 class="box-title">Agregar Apartado <small>En esta parte tambien se podra modificar los apartados</small></h3>
</div>

<div class="box-body no-padding">
  <div class="mailbox-read-info">
    <form class="form_apartado" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nombre del apartado</label>
        <input type="text" class="form-control" id="apartado" name="apartado">
        <input type="hidden" name="sistema" value="<?php echo $id_modulo ?>">
      </div>
      <button type="button" class="btn btn-default btn_apartado">Agregar</button>
      <button type="button" class="btn btn-default limpiar">Limpiar</button>
      <br><br>
    </form>
    <div class="mensaje_apartado">
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
    </div>
    <br>

  </div>
</div>
<script>

  $(document).on("click",".btn_apartado",function(){
    $(".btn_apartado").prop( "disabled",true)
      var url="paneles/process_apartado.php";
          $.ajax({
              type:"POST",
              url:url,
              data:$(".form_apartado").serialize(),
              success:function(data){
                  $(".mensaje_apartado").html(data); 
                  $(".btn_apartado").prop( "disabled",false)    
                
              }
          });
          return false;
    
  })
  $(document).on("click",".limpiar",function(event){
    $("#apartado").val("")
    $("#apartado").focus()
  })
</script>