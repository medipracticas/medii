
            <div class="box-header with-border">
              <h3 class="box-title">Apartados - Vista Completa </h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <div class="btn-group">
                    <a type="button" href="?modulo=<?php echo $modulo ?>&accion=agregar_apartado" class="btn btn-default btn-sm"><i class="fa fa-plus-circle"></i></a>
                    
                  </div> 
                  
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Modulo</th>
                      <th>Enfoque Principales</th>
                      <th>Enfoques de apoyo</th>
                      <th>Acciones</th>
                      <th>Evaluacion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $consulta = mysqli_query($q_sec,"SELECT * FROM apartados WHERE id_modulo = '$id_modulo' order by posicion asc");
                      while ($array = mysqli_fetch_array($consulta)) {
                        $id_apartado = $array["id_apartado"];
                        $apartado = $array["apartado"];
                        ?>
                          <tr>
                            <td><?php echo $apartado ?></td>
                            <td>
                              <div class="btn-group">

                                <a href="anatofisiologia.php?modulo=<?php echo $modulo ?>&apartado=<?php echo $id_apartado ?>" target='_blank' class="btn btn-default btn-xs">F.A</a>     
                                <button type="button" class="btn btn-default btn-xs">C1</button>
                                <button type="button" class="btn btn-default btn-xs">C2</button>
                                <button type="button" class="btn btn-default btn-xs">C3</button>
                                <button type="button" class="btn btn-default btn-xs">C4</button>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-medkit"></i></button>
                                
                              </div>  
                            </td>
                            <td>
                              <i class="fa fa-file-text-o"></i> 
                              <i class="fa  fa-search"></i> 
                              <i class="fa fa-briefcase"></i> 
                              <i class="fa fa-book"></i> 
                              <i class="fa  fa-sticky-note-o"></i>
                            </td>
                            <td>
                              <i class="fa fa-edit"></i> 
                              <i class="fa fa-times-circle"></i></td>
                            <td>2 sem 2 extrellas</td>
                          </tr>
                        <?php
                      }
                    ?>
                    
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                
                <!-- /.pull-right -->
              </div>
            </div>