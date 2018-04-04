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
          <a href="?modulo=<?php echo $modulo ?>" class="btn btn-primary btn-block margin-bottom">Apartados</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Principal</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-edit"></i> Anatofisiogia
                <li><a href="#"><i class="fa fa-envelope-o"></i> Clinica Patologia</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Clinica Practica</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Clinica S.S</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Clinica Casos</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i><i class="fa fa-plus-circle"></i> Farmacologia</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>

          
          <!-- /.box -->
          <div class="box box-solid collapsed-box ">
            <div class="box-header with-border">
              <h3 class="box-title">Medipracticas</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Generales</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Abierto</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Dinamico</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Evaluacion</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-solid collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Complementos</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Articulos
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> En busqueda</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Materiales</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Bibliografia</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Notas</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Imagenes</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Videos</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Links</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Metas</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <?php 
              include("paneles/controlador.php");
            ?>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>