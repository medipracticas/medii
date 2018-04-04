<!DOCTYPE html>
<?php 
  include("funciones.php");
  $page    = $_SERVER["REQUEST_URI"];
  $sistema = sanitizar_get("sistema");
  $accion  = sanitizar_get("accion");
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
        <?php include("paneles/panel_titulo.php") ?>
        <small><a href="">Progreso, Metas, Nivel, Autoevaluacion</a></small>
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
          <a href="?sistema=<?php echo $sistema ?>" class="btn btn-primary btn-block margin-bottom">Regresar Vista General</a>

          <div class="box box-solid" >
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Apartado</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
                <ol style="margin-left:-30px;font-size: .8em">
                <li>Ficha General</li>
                <li>Aspectos Anatomicos Particulares</li>
                <li>Raices y Nervios</li>
                <li>Ramos</li>
                <li>Irrigacion</li>
                <li>Division Interna</li>
                <li>Vias de Comunicacion</li>
              </ol>
              </blockquote> 
              
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box box-solid" >
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Ordered Lists</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
                <ol style="margin-left:-30px;font-size: .8em">
                <li>Neuronas y Glia</li>
                <li>Sinapsis y Conduccion</li>
                <li>Receptores</li>
                <li>Fisiologia Neuromuscular</li>
                <li>Medula Espinal</li>
                <li>Bulbo Raquideo</li>
                <li>Protuberancia</li>
                <li>Puente</li>
                <li>Cerebelo</li>
                <li>Talamo</li>
                <li>Hipotalamo</li>
                <li>Corteza Cerebral</li>
                <li>Cerebro Estructura Interna</li>
                <li>Nucleos Basales</li>
                <li>Formacion Reticular</li>
                <li>Pares Craneales</li>
                <li>Sistema Limbico</li>
                <li>Sistemas Especiales</li>
              </ol>
              </blockquote> 
              
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <!-- /.col -->
        <div class="col-md-9">
          <div>
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Recopilador</a></li>
                <li><a href="#tab_2" data-toggle="tab">Presentacion</a></li>
                <li><a href="#tab_3" data-toggle="tab">Guia I</a></li>
                <li><a href="#tab_3" data-toggle="tab">Guia II</a></li>
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
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-edit" style="color:black"></i></a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <b><h1>Medula espinal</h1></b>

                  <p>Exactly like the original bootstrap tabs except you should use
                    the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                  A wonderful serenity has taken possession of my entire soul,
                  like these sweet mornings of spring which I enjoy with my whole heart.
                  I am alone, and feel the charm of existence in this spot,
                  which was created for the bliss of souls like mine. I am so happy,
                  my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                  that I neglect my talents. I should be incapable of drawing a single stroke
                  at the present moment; and yet I feel that I never was a greater artist than now.
                  <br><br>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                  The European languages are members of the same family. Their separate existence is a myth.
                  For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                  in their grammar, their pronunciation and their most common words. Everyone realizes why a
                  new common language would be desirable: one could refuse to pay expensive translators. To
                  achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                  words. If several languages coalesce, the grammar of the resulting language is more simple
                  and regular than that of the individual languages.
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  It has survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                  sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                  like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
