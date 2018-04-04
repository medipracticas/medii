
  $(document).on("click",".subapartado_list",function(){
    var id_subapartado = $(this).attr("id")
    var titulo_subapartado = $(this).html()    
    $(".elementos_ventana").trigger("click")
    $(".div_form_subapartado").hide()
    $(".titulo_subapartado").show()
    $(".titulo_subapartado").html(titulo_subapartado)
    $(".input_subapartado").val(titulo_subapartado)
    $(".input_id_subapartado").val(id_subapartado)

    $(".forms_edit_sub").hide()
    $("#formsub_"+id_subapartado+"").show()

    /*var id_subapartado = $(this).attr("id")
    var titulo_subapartado = $(this).html()
    $(".elementos_ventana").trigger("click")
    $(".div_form_subapartado").hide()
    $(".titulo_subapartado").show()
    $(".titulo_subapartado").html(titulo_subapartado)
    $(".input_subapartado").val(titulo_subapartado)
    $(".input_id_subapartado").val(id_subapartado)

    $(".mostrar_subapartado").show()
    $(".recop_edit_div").hide()
    */
    

  });

  $(document).on("click",".editar_subapartado",function(){
    $(".div_form_subapartado").show()
    $(".titulo_subapartado").hide()
    $(".input_subapartado").focus()
  });

  $(document).on("click",".cancelar_sub_apartado",function(){
    $(".div_form_subapartado").hide()
    $(".titulo_subapartado").show()
  });

  $(document).on("click",".modificar_sub_apartado",function(){
    $(".modificar_sub_apartado").prop( "disabled",true)
      var subapartado    = $(".input_subapartado").val()
      var id_subapartado = $(".input_id_subapartado").val()
      var url="anatofisiologia/process_modificar_subapartado.php?subapartado="+subapartado+"&id_subapartado="+id_subapartado+"";
          $.ajax({
              type:"GET",
              url:url,
              success:function(data){
                if (data != "vacio") {
                  $(".div_form_subapartado").hide()
                  $(".titulo_subapartado").show()
                  $(".titulo_subapartado").html(data)
                  $(".lista_subapartados #"+id_subapartado+"").html(data)
                }
                else{
                  $(".mensaje_subapartado_edit").html("Campo vacio en el formulario")
                }
                $(".modificar_sub_apartado").prop( "disabled",false)
              }
          });
          return false;  
  })
/**
  $(document).on("click",".recop_edit",function(){
    $(".mostrar_subapartado").hide()
    $(".recop_edit_div").show()

    var id_subapartado = $(".input_id_subapartado").val()
    $(".recop_edit_div").load("anatofisiologia/recop_edit.php?gett="+id_subapartado+"")
  });  **/

  $(document).on("click",".btn_ocultar",function(){
    $(".info_subapartado").hide()
  });

  $(document).on("click",".btn_mostrar",function(){
    $(".info_subapartado").show()
  });



