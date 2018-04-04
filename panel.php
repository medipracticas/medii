<!DOCTYPE html>
<?php 
  include("funciones.php");
  $page    = $_SERVER["REQUEST_URI"];
  $modulo  = sanitizar_get("modulo");
  $accion  = sanitizar_get("accion");

  $id_modulo = consulta_txt("SELECT id_modulo FROM modulos WHERE getvar = '$modulo'","id_modulo");
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

  <!-- Content Wrapper. Contains page content -->
    <?php include("controlador.php"); ?>
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
