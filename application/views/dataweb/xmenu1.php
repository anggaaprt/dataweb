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
                                        <h4>Apakah anda yakin hapus data "<strong id="nama"></strong>" ini ?</h4>
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
                            <th width=700>Images</th>
                            <th>Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php foreach ( $sql_menu1_segment1 as $row_segment){ 
                            $images1=$row_segment->images;
                            $images2=$row_segment->images2;
                            $images3=$row_segment->images3;
                            $images4=$row_segment->images4;
                            $images5=$row_segment->images5;
                            $images6=$row_segment->images6;
                            
                            if ($images1 !=NULL){
                                $img1=explode('.',$images1);
                                $image1=$img1[0].'_thumb'.'.'.$img1[1];
                            }
                            else{
                                $image1="foto/empty.png";
                            }
                            if ($images2 !=NULL){
                                $img2=explode('.',$images2);
                                $image2=$img2[0].'_thumb'.'.'.$img2[1];
                            }
                            else{
                                $image2="foto/empty.png";
                            }
                            if ($images3 !=NULL){
                                $img3=explode('.',$images3);
                                $image3=$img3[0].'_thumb'.'.'.$img3[1];
                            }
                            else{
                                $image3="foto/empty.png";
                            }
                            if ($images4 !=NULL){
                                $img4=explode('.',$images4);
                                $image4=$img4[0].'_thumb'.'.'.$img4[1];
                            }
                            else{
                                $image4="foto/empty.png";
                            }
                            if ($images5 !=NULL){
                                $img5=explode('.',$images5);
                                $image5=$img5[0].'_thumb'.'.'.$img5[1];
                            }
                            else{
                                $image5="foto/empty.png";
                            }
                            if ($images6 !=NULL){
                                $img6=explode('.',$images6);
                                $image6=$img6[0].'_thumb'.'.'.$img6[1];
                            }
                            else{
                                $image6="foto/empty.png";
                            }
                            ?> 
                          <tr>
                            <td class="center" style="vertical-align:middle;">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" name="id[]" value="<?= $row_segment->id; ?>" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>
                              <a href=""><img src="<?php echo base_url() . 'upload/'.$image1; ?>" alt="User Image" class="img-bordered" style="width:100px;height:100px"></a>&nbsp;
                              <a href=""><img src="<?php echo base_url() . 'upload/'.$image2; ?>" alt="User Image" class="img-bordered" style="width:100px;height:100px"></a>
                              <a href=""><img src="<?php echo base_url() . 'upload/'.$image3; ?>" alt="User Image" class="img-bordered" style="width:100px;height:100px"></a>&nbsp;
                              <a href=""><img src="<?php echo base_url() . 'upload/'.$image4; ?>" alt="User Image" class="img-bordered" style="width:100px;height:100px"></a>
                              <a href=""><img src="<?php echo base_url() . 'upload/'.$image5; ?>" alt="User Image" class="img-bordered" style="width:100px;height:100px"></a>&nbsp;
                              <a href=""><img src="<?php echo base_url() . 'upload/'.$image6; ?>" alt="User Image" class="img-bordered" style="width:100px;height:100px"></a>
                            </td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->judul; ?></td>
                            <td style="vertical-align: middle;" align="center"><a href="<?php echo base_url() . 'menu/edit/'.$menu.'/'.$row_segment->id.'/'.$title; ?>" title="Edit!" class="btn-sm btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                <a href="" class="open-myModalDelete btn-sm btn-danger" 
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
                          <div class="col-xs-2">
                              <a href="<?php echo base_url() . 'menu/add/'.$menu.'_'.$segment1.'/'.$menu.'/'.$title; ?>" class="btn btn-block btn-success">Add</a>
                          </div>
                      </div>
                    </div><!-- /.box-body -->
                    </form><!--/form-->
                  </div><!-- /.box -->
                    
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    
                    <form method="POST" action="<?php echo base_url().'menu/deleteCheck/'.$menu; ?>" class="form-horizontal"><!--form-->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th class="center" style="vertical-align:middle;" width=5px>
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>Images</th>
                            <th>Title</th>
                            <th>Creator</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php foreach ( $sql_menu1_segment2 as $row_segment){ 
                            $idcreator=$row_segment->creator;
    
                            
                            $cekfrm = $this->db->query("SELECT judul FROM tbl_content where id = '$idcreator'");
                            if ($cekfrm->num_rows()>0)
                            {
                                $caricreator3 = "SELECT judul FROM tbl_content where id = '$idcreator'";
                                $list3 = $this->Data_model->jalankanQuery($caricreator3, 3);
                                $creator= $list3[0]->judul;
                            }else{
                                $creator= 'Creator not found'; 
                            }
    
                            $images1=$row_segment->images;
                            $images2=$row_segment->images2;
                            
                            if ($images1 !=NULL){
                                $img1=explode('.',$images1);
                                $image1=$img1[0].'_thumb'.'.'.$img1[1];
                            }
                            else{
                                $image1="foto/empty.png";
                            }
                            if ($images2 !=NULL){
                                $img2=explode('.',$images2);
                                $image2=$img2[0].'_thumb'.'.'.$img2[1];
                            }
                            else{
                                $image2="foto/empty.png";
                            }
                            ?> 
                          <tr>
                            <td class="center" style="vertical-align:middle;">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" name="id[]" value="<?= $row_segment->id; ?>" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>
                              <a href=""><img src="<?php echo base_url() . 'upload/'.$image1; ?>" alt="User Image" class="img-bordered" style="width:100px;height:100px"></a>&nbsp;
                              <a href=""><img src="<?php echo base_url() . 'upload/'.$image2; ?>" alt="User Image" class="img-bordered" style="width:100px;height:100px"></a>
                            </td>
                            <td style="vertical-align: middle;" align="center"><?php echo $creator; ?></td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->judul; ?></td>
                            <td style="vertical-align: middle;" align="center"><a href="<?php echo base_url() . 'menu/edit/'.$menu.'/'.$row_segment->id.'/'.$title; ?>" title="Edit!" class="btn-sm btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                <a href="" class="open-myModalDelete btn-sm btn-danger" 
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
                          <div class="col-xs-2">
                              <a href="<?php echo base_url() . 'menu/add/'.$menu.'_'.$segment2.'/'.$menu.'/'.$title; ?>" class="btn btn-block btn-success">Add</a>
                          </div>
                      </div>
                        
                        
                    </div><!-- /.box-body -->
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