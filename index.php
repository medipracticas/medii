<!DOCTYPE html>
<?php include("funciones.php");?>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Principal
        <small>Panel de control</small> 
        <small><a href="">Vista en bloques</a></small>
        <small><a href="">Vista en tablas</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
    
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <a href="panel.php?modulo=nervioso">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span ><img src="iconos/icononervioso.png" class="info-box-icon" alt=""></span>
            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Nervioso</span>
            </div>
          </div>
        </div>
        </a>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span ><img src="iconos/iconoendocrino.jpg" class="info-box-icon" alt=""></span>

            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Endocrino</span>
            </div>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span ><img src="iconos/iconodigestivo.jpg" class="info-box-icon" alt=""></span>

            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Digestivo</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span ><img src="iconos/iconocorazon.png" class="info-box-icon" alt=""></span>

            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Cardiovascular</span>
            </div>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span ><img src="iconos/iconopulmon.png" class="info-box-icon" alt=""></span>
            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Respiratorio</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span ><img src="iconos/iconorepro.jpg" class="info-box-icon" alt=""></span>

            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Reproductor</span>
            </div>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span ><img src="iconos/iconourinario.png" class="info-box-icon" alt=""></span>

            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Urinario</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span ><img src="iconos/iconosangre.png" class="info-box-icon" alt=""></span>

            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Hematico</span>
            </div>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span ><img src="iconos/iconoinmuno.png" class="info-box-icon" alt=""></span>
            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Inmunologico</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span ><img src="iconos/iconotegu.png" class="info-box-icon" alt=""></span>

            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">Tegumentario</span>
            </div>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span ><img src="iconos/iconosoma.png" class="info-box-icon" alt=""></span>

            <div class="info-box-content">
              <span class="info-box-text">Sistema</span>
              <span class="info-box-number">O.M.A</span>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->
      <br><br><br><hr>
      <div class="row">
        <div class="col-md-3">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Farmacologia</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              The body of the box
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Infectologia</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              The body of the box
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Bioquimica</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              The body of the box
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Genetica</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              The body of the box
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
