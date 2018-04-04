<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><?php echo $apartado_name ?> - Agregar Apartado</h4>
      </div>
      <div class="modal-body">
          <form class="form_subapartado">
            <input type="text" class="form-control" id="input_subapartado" name="subapartado">
            <input type="hidden" name="id_apartado" value="<?php echo $id_apartado ?>">
          </form>
          <div class="mensaje_subapartado"></div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary btn_agregar_sub">Aceptar</button>
          <button type="button" class="btn btn-primary limpiar">Limpiar</button>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).on("click",".btn_agregar_sub",function(){
      $(".btn_agregar_sub").prop( "disabled",true)
        var url="modals/process_subapartado.php";
        $.ajax({
            type:"POST",
            url:url,
            data:$(".form_subapartado").serialize(),
            success:function(data){
                if (data == 'insertar') {
                    $.ajax({
                      type:"POST",
                      url:"modals/process_subapartado_lista.php",
                      data:$(".form_subapartado").serialize(),
                      success:function(data){
                        $(".mensaje_subapartado").html("<br>El subapartado ha sido registrado exitosamente"); 
                        $(".lista_subapartados").html(data)
                      }
                    });   
                }
                else{
                    $(".mensaje_subapartado").html(data); 
                }
                $(".btn_agregar_sub").prop( "disabled",false)    
                  
            }
        });
        return false;
      
    })
    $(document).on("click",".limpiar",function(event){
      $("#input_subapartado").val("")
      $("#input_subapartado").focus()
    })
</script>