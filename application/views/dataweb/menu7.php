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
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;<?php echo $title ?></li>
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
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                       <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       </div>
                    </div><!-- /.box-header -->

                    <form method="POST" action="<?php echo base_url().'menu/deleteCheck/'.$menu; ?>" class="form-horizontal"><!--form-->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th class="center" style="vertical-align:middle;" width=5px>
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>Date</th>
                            <th>Name</th>
                            <th width=700>Message</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php foreach ( $sql_menu7_segment1 as $row_segment){ 
                                $s = explode(("~"),$this->dataweb->status($row_segment->status));
                            ?> 
                          <tr>
                            <td class="center" style="vertical-align:middle;">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" name="id[]" value="<?= $row_segment->id; ?>" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->tgl; ?></td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->sub_judul; ?></td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->content; ?></td>
                            <td style="vertical-align: middle;" align="center"><a class="btn-xs <?php echo $s[1]; ?>" ><?php echo $s[0] ?></a></td>
                            <td style="vertical-align: middle;" align="center"><a href="<?php echo base_url() . 'menu/edit/'.$menu.'/'.$row_segment->id.'/'.$title; ?>" title="Edit!" class="btn btn-xs btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                <a href="" class="open-myModalDelete btn btn-xs btn-danger" 
                                       title="Delete!"
                                       data-toggle="modal"											   
                                       data-iddelete="<?php echo $row_segment->id; ?>" 
                                       data-nama="<?php echo $row_segment->judul; ?>"
                                       data-menu="<?php echo $menu; ?>"
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
                              <button type="submit" class="btn btn-block btn-danger" onclick="return confirm('Are you sure you want to delete this content?');">Delete</button>
                          </div>
                      </div>
                    </div><!-- /.box-body -->
                    </form><!--/form-->
                      
                  </div><!-- /.box -->
                  
                    
                </div><!-- /.col -->
              </div><!-- /.row -->
            </section><!-- /.content -->
            

        </div>
        <div class="col-xs-1"></div>
    </div>
</div>
<!-- /.row (main row) -->