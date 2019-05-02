<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            
<!--            modal-->
            <div class="modal fade" id="myModalDelete" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Form Menu</h4>
                        </div>
                        <form method="POST" class="form-horizontal" action="<?php echo base_url() . "menu/menu_delete"; ?>">
                            <div class="modal-body">
                                <table width="100%" border="0">
                                    <div class="col-md-12">
                                        <h4>Apakah anda yakin hapus data "<strong id="nama"></strong>" ini ?</h4>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <input readonly hidden="hidden" type="text" required id="iddelete" name="hapus">       
                                        </div>
                                    </div>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" name="btnSubmit" value="Hapus">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
<!--            //modal-->
            
            <section class="content-header">
                <h1>
                    <?php echo $tittle ?>
                </h1>
                <ol class="breadcrumb">
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;<?php echo $tittle ?></li>
                </ol>
            </section>
            
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-xs-12">

                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                       <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Titile</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php foreach ( $menu_segment as $segment){ ?>
                          <tr>
                            <td><?php echo $segment->form_name; ?></td>
                            <td><a href="<?php echo base_url() . 'menu/menu_edit/'.$segment->id; ?>" title="Edit!" class="btn-sm btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                <a href="" class="open-myModalDelete btn-sm btn-danger" 
                                       title="Hapus!"
                                       data-toggle="modal"											   
                                       data-iddelete="<?php echo $segment->id; ?>" 				   
                                       data-nama="<?php echo $segment->form_name; ?>" 
                                       onClick="$('#myModalDelete').modal({backdrop: 'static', keyboard: false})">
                                        <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                          </tr>
                           <?php } ?> 
                        </tbody>
                      </table>
                    
                      <div class="row">
                          <div class="col-xs-2">
                              <a href="<?php echo base_url() . 'menu/create/'; ?>" class="btn btn-block btn-success">Add</a>
                          </div>
                      </div>
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
                  
                    <a href="<?php echo base_url() . 'menusegment/exampletesty'; ?>">Example Testmony</a><br>
                    <a href="<?php echo base_url() . 'menusegment/examplemail'; ?>">Example Send Email</a><br>
                    
                  <div hidden class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
                    
                </div><!-- /.col -->
              </div><!-- /.row -->
            </section><!-- /.content -->
            

        </div>
        <div class="col-xs-1"></div>
    </div>
</div>
<!-- /.row (main row) -->