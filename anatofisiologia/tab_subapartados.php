<div class="box-body no-padding" style="margin:-10px">
    <div class="mailbox-read-info">
        <div class="info_subapartado">
            <h2 style="margin-top:8px"><?php echo $apartado_name ?> </h2>
            <h4 class="titulo_subapartado"></h4>
        </div>
        <div class="row div_form_subapartado" style="display:none;margin-bottom:15px">  
            <div class="col-md-6">  
                  <div class="input-group">
                      <input type="text" class="form-control input-sm input_subapartado" name="subapartado">
                      <input type="hidden" class="form-control input-sm input_id_subapartado" name="id_subapartado">
                      <span class="input-group-btn">
                      <button class="btn btn-default btn-sm modificar_sub_apartado" type="button">Aceptar</button>
                      <button class="btn btn-default btn-sm cancelar_sub_apartado" type="button">Cancelar</button>
                      </span>
                      <div class="mensaje_subapartado_edit"></div>
                  </div>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-xs">Rec.Lect</button>     
            <button type="button" class="btn btn-default btn-xs">Rec.Edit</button>
            <button type="button" class="btn btn-default btn-xs">Present.Lect</button>
            <button type="button" class="btn btn-default btn-xs">Present.Edit</button>
            <button type="button" class="btn btn-default btn-xs editar_subapartado"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-default btn-xs borrar_subapartado"><i class="fa fa-times-circle-o"></i></button>
            <button type="button" class="btn btn-default btn-xs btn_ocultar">Ocultar</button>
            <button type="button" class="btn btn-default btn-xs btn_mostrar">Mostrar</button>                        
        </div>
    </div> 
                            
    <div>
    <?php 
      $consulta_sub_sub = mysqli_query($q_sec,"SELECT id_subapartado,subapartado,texto_borrador FROM subapartados WHERE id_apartado = '$id_apartado'");
        while ($array = mysqli_fetch_array($consulta_sub_sub)) {
            $id_subapartado = $array["id_subapartado"];
            $subapartado    = $array["subapartado"];
            $texto_borrador = $array["texto_borrador"];
            ?>
              <div class="mailbox-read-message forms_edit_sub" id="formsub_<?php echo $id_subapartado?>" style="display: none">   
                  <form class="form_texto" method="POST">
                    <textarea id="editor<?php echo $id_subapartado ?>" name="name" rows="10" cols="80">
                      <?php echo $texto_borrador ?>
                    </textarea>                    
                  </form>
                  <form method="POST" class="memo_form_<?php echo $id_subapartado ?>" style="display: none">
                      <input type="text" class="memo_input_<?php echo $id_subapartado ?>" name="texto_borrador">
                      <input type="text" value="<?php echo $id_subapartado ?>" name="id_subapartado_sub">
                  </form>
                  
              </div>
            <?php           
        }
    ?>
    </div>

    <div class="mensaje_cambios"></div>
    <div class="box-footer">           
      <button type="button" class="btn btn-default btn_guardar_cambios_sub">Guardar Cambios</button>
      <div class="pull-right">
        <button type="button" class="btn btn-default">Bibliografia</button>
        <button type="button" class="btn btn-default">Comentario</button>
        <button type="button" class="btn btn-default">Dudas</button>
        <button type="button" class="btn btn-default">Agregar Pregunta</button>
        <button type="button" class="btn btn-default">Articulo</button>  
      </div>                          
    </div>
</div>

