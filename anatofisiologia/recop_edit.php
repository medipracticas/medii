<?php 
	include("../funciones.php");
	$var = sanitizar_get("gett");
	$texto = consulta_txt("SELECT texto_borrador FROM subapartados WHERE id_subapartado = '$var'","texto_borrador");
?>
<form style="margin:-10px" class="form_texto" method="POST">
    <textarea id="editor1" name="name" rows="10" cols="80">
        <?php echo $texto ?>
    </textarea>

	<input type="text" value="<?php echo $var ?>" name="id_subapartado" >
	<input type="text" value="borrador" name="tipo_texto"><button type="reset" class="btn btn-default btn_guardar_subapartado"> Guardar Cambios</button>
</form>
<div class="mensaje_cambios"></div>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
    $(document).on("click",".btn_guardar_subapartado",function(){
   


    $(".btn_guardar_subapartado").prop( "disabled",true)
      var url="anatofisiologia/process_guardar_cambios.php";
          $.ajax({
              type:"POST",
              url:url,
              data:$(".form_texto").serialize(),
              success:function(data){
                  $(".mensaje_cambios").html(data); 
                  $(".btn_guardar_subapartado").prop( "disabled",false)    
                
              }
          });
          return false;
    
  })
</script>
