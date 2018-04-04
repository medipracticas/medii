<!DOCTYPE html>
<?php 
  include("funciones.php");
  $page    = $_SERVER["REQUEST_URI"];
  $modulo  = sanitizar_get("modulo");
  $accion  = sanitizar_get("accion");
  $id_apartado = sanitizar_get("apartado");

  $id_modulo = consulta_txt("SELECT id_modulo FROM modulos WHERE getvar = '$modulo'","id_modulo");
  $apartado_name  = consulta_txt("SELECT apartado FROM apartados WHERE id_apartado = '$id_apartado'","apartado");

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Medi Proyecto</title>
  <?php include("componentes/enlaces_css.php") ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <?php include("componentes/header_barra.php") ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php include("componentes/menu.php") ?>
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistema Nervioso - Neurologia
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="panel.php?modulo=<?php echo $modulo ?>" class="btn btn-primary btn-block margin-bottom">Regresar Vista en General</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
              <h3 class="box-title">Apartado</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body" style="padding-bottom:0px">
              <blockquote>
                <ol style="margin-left:-30px;font-size: .8em;" class="lista_subapartados">
                  <?php 
                  $consulta_uno = mysqli_query($q_sec,"SELECT id_subapartado,subapartado FROM subapartados WHERE id_apartado = '$id_apartado'");
                  while ($array = mysqli_fetch_array($consulta_uno)) {
                    $id_subapartado = $array["id_subapartado"];
                    $subapartado     = $array["subapartado"];
                    echo "<li style='cursor:pointer;' class='subapartado_list' id='$id_subapartado'>$subapartado</li>";
                  }
                  ?>
                </ol>
                <p style="font-size:.8em;margin-bottom:-10px"><a href="" data-toggle="modal" data-target="#modal-default">Agregar Apartado</a></p>
              </blockquote>
            </div>
            <!-- /.box-body -->
          </div>
         
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
              <h3 class="box-title">Apartados</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
                <ol style="margin-left:-30px;font-size: .8em">
                  <?php 
                    $consulta = mysqli_query($q_sec,"SELECT * FROM apartados WHERE id_modulo = '$id_modulo' order by posicion asc");
                    while ($array = mysqli_fetch_array($consulta)) {
                      $id_apartado_list = $array["id_apartado"];
                      $apartado = $array["apartado"];
                      ?><li><?php echo $apartado ?></li><?php
                    }
                  ?>
                </ol>
              </blockquote> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div>
                    <div class="nav-tabs-custom"> 
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Recopilador</a></li>
                        <li><a href="#tab_2" data-toggle="tab">T.Limpio</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Guia I</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Guia II</a></li>
                        <li><a href="#tab_5" data-toggle="tab" class="elementos_ventana">Subapartados</a></li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Notas <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li role="presentation"><a href="#tab_3" data-toggle="tab">Guia I</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Complementos <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li role="presentation"><a href="#tab_3" data-toggle="tab">Guia I</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                          </ul>
                        </li>
                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                          <?php include("anatofisiologia/tab_recopilador.php"); ?>
                        </div>
                        <div class="tab-pane" id="tab_2">
                          <?php include("anatofisiologia/tab_presentacion.php"); ?>
                        </div>
                        <div class="tab-pane" id="tab_3">
                        </div>
                        <div class="tab-pane" id="tab_4">
                        </div>
                        <div class="tab-pane" id="tab_5">
                          <?php include("anatofisiologia/tab_subapartados.php"); ?>
                        </div>
                      </div>
                          
                    </div>
            </div>
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <?php include("componentes/aside.php") ?>
  <div class="control-sidebar-bg"></div>
  <?php include("modals_menu/modal_imagen.php"); ?>
</div>
<?php include("componentes/enlaces_js.php") ?>
</body>
</html>

<?php 
  include("modals/modal_subapartado.php");
?>
<script src="bower_components/ckeditor/ckeditor.js"></script>

<?php  
  $consulta_sub_js = mysqli_query($q_sec,"SELECT id_subapartado FROM subapartados WHERE id_apartado = '$id_apartado'");
  while ($array = mysqli_fetch_array($consulta_sub_js)) {
    $id_subapartado_js = $array["id_subapartado"];
    echo "
      <script>
        $(function () {
          // Replace the <textarea id='editor$id_subapartado_js'> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace('editor$id_subapartado_js')
          //bootstrap WYSIHTML5 - text editor
          $('.textarea').wysihtml5()
        })
      </script> 


    ";
  }

  echo "<script>$(document).on('click','.btn_guardar_cambios_sub',function(){
    ";
  $consulta_sub_js_enviar = mysqli_query($q_sec,"SELECT id_subapartado FROM subapartados WHERE id_apartado = '$id_apartado'");
  while ($array = mysqli_fetch_array($consulta_sub_js_enviar)) { 
    $id_subapartado_enviar = $array["id_subapartado"];
    echo "
      var contenido_$id_subapartado_enviar = CKEDITOR.instances['editor$id_subapartado_enviar'].getData();
      $('.memo_input_$id_subapartado_enviar').val(contenido_$id_subapartado_enviar)
      var url='anatofisiologia/process_guardar_cambios.php';
      
      $.ajax({
        type:'POST',
        url:url,
        data:$('.memo_form_$id_subapartado_enviar').serialize(),
        success:function(data){
            alert(data)
            $('.btn_guardar_cambios_sub').prop('disabled,false')        
        }
      });

    ";
  }
  echo "})</script>";  
 

?>
<script src='anatofisiologia/acciones_subapartados.js'></script>