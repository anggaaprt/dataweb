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
                            <h4 class="modal-title">Delete Content</h4>
                        </div>
                        <form method="POST" class="form-horizontal" action="<?php echo base_url() . "menu/delete"; ?>">
                            <div class="modal-body">
                                <table width="100%" border="0">
                                    <div class="col-md-12">
                                        <h4>Are you sure you want to delete this content "<strong id="nama"></strong>" ?</h4>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <input readonly hidden="hidden" type="text" required id="iddelete" name="hapus">   
                                            <input readonly hidden="hidden" type="text" required id="menu" name="menu">   
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
                    <?php echo $title ?>
                </h1>
                <ol class="breadcrumb">
                    <li><i class="fa fa-shopping-basket"></i>&nbsp;<?php echo $title ?></li>
                </ol>
            </section>
            
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-xs-12">
                  <?php if ($this->session->flashdata('empty')) {?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon fa fa-ban"></i> Warning!</strong>
                            <?php echo $this->session->flashdata('empty'); ?>
                        </div>
                  <?php }else if ($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon fa fa-check"></i> Success</strong>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                  <?php } ?>
                  <?php 
                       if($this->session->flashdata('notif')){
                        echo $this->session->flashdata('notif');
                       }
                  ?>
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                       <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       </div>
                    </div><!-- /.box-header -->

                    <form method="POST" action="<?=base_url()?>email/sendMail3" class="form-horizontal" enctype="multipart/form-data">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Name</label>
                          <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" placeholder="Name" value="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Message</label>
                          <div class="col-sm-8">
                            <textarea rows="10" cols="80" name="message" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-8">
                            <input type="email" name="youremail" class="form-control" placeholder="Email" value="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Password</label>
                          <div class="col-sm-8">
                            <input type="password" name="pass" class="form-control" placeholder="Passeord" value="">
                          </div>
                        </div>
                      </div><!-- /.box-body -->
                        
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo base_url().'menusegment/cancel/'.$menu; ?>">Back</a>
                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                      </div><!-- /.box-footer -->
                    </form>
                      
                  </div><!-- /.box -->
                  
                    
                </div><!-- /.col -->
              </div><!-- /.row -->
            </section><!-- /.content -->
            

        </div>
        <div class="col-xs-1"></div>
    </div>
</div>
<!-- /.row (main row) -->