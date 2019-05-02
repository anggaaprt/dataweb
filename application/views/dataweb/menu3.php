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
                      <h3 class="box-title">Sessions 1</h3>
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
                            <th width=50>Images</th>
                            <th>Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php foreach ( $sql_menu3_segment1 as $row_segment){ 
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
                              <div class="row">
                                  <div class="col-sm-2">
                                      <div  style="background: url(<?php echo base_url().'upload/'.$image1?>) no-repeat center;background-size: 90px; width: 100px;vertical-align: middle;height: 70px;box-shadow: 0px 0px 1px 1px grey; margin-bottom:4px;">
                                        <a class="example-image-link" href="<?php echo base_url().'upload/'.$images1?>">
                                        <img src="<?php echo base_url().'upload/foto/blank.png'?>" style="width: 100%;height: 100%;" />
                                        </a>
                                      </div>
                                  </div>
                              </div>
                            </td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->judul; ?></td>
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
                              <button type="submit" class="btn btn-sm btn-block btn-danger" onclick="return confirm('Are you sure you want to delete this content?');">Delete</button>
                          </div>
                          <div class="col-xs-2">
                              <a href="<?php echo base_url() . 'menu/add/'.$menu.'_'.$segment1.'/'.$menu.'/'.$title; ?>" class="btn btn-sm btn-block btn-success">Add</a>
                          </div>
                      </div>
                    </div><!-- /.box-body -->
                    </form><!--/form-->
                      
                  </div><!-- /.box -->

                   <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Sessions 2 </h3>
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
                            <th width=50>Images</th>
                            <th>Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php foreach ( $sql_menu3_segment2 as $row_segment){ 
                            $images1=$row_segment->images;
                            $images2=$row_segment->images2;
                            $images3=$row_segment->images3;
                            $images4=$row_segment->images4;
                            $images5=$row_segment->images5;
                            $images6=$row_segment->images6;
                            $thumb = explode(("~"),$this->dataweb->thumb($images1,$images2,$images3,$images4,$images5,$images6));
                            
                            ?> 
                          <tr>
                            <td class="center" style="vertical-align:middle;">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" name="id[]" value="<?= $row_segment->id; ?>" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>
                              <div class="row">
                                  <div class="col-sm-2">
                                      <div  style="background: url(<?php echo base_url().'upload/'.$thumb[1]?>) no-repeat center;background-size: 90px; width: 100px;vertical-align: middle;height: 70px;box-shadow: 0px 0px 1px 1px grey; margin-bottom:4px;">
                                        <a class="example-image-link" href="<?php echo base_url().'upload/'.$images1?>">
                                        <img src="<?php echo base_url().'upload/foto/blank.png'?>" style="width: 100%;height: 100%;" />
                                        </a>
                                      </div>
                                  </div>
                              </div>
                            </td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->judul; ?></td>
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
                              <button type="submit" class="btn btn-sm btn-block btn-danger" onclick="return confirm('Are you sure you want to delete this content?');">Delete</button>
                          </div>
                          <div class="col-xs-2">
                              <a href="<?php echo base_url() . 'menu/add/'.$menu.'_'.$segment2.'/'.$menu.'/'.$title; ?>" class="btn btn-sm btn-block btn-success">Add</a>
                          </div>
                      </div>
                    </div><!-- /.box-body -->
                    </form><!--/form-->
                      
                  </div><!-- /.box -->
                   <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Sessions 3 </h3>
                       <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       </div>
                    </div><!-- /.box-header -->

                    <form method="POST" action="<?php echo base_url().'menu/deleteCheck/'.$menu; ?>" class="form-horizontal"><!--form-->
                    <div class="box-body">
                      <table id="example3" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th class="center" style="vertical-align:middle;" width=5px>
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th width=50>Images</th>
                            <th>Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php foreach ( $sql_menu3_segment3 as $row_segment){ 
                            $images1=$row_segment->images;
                            $images2=$row_segment->images2;
                            $images3=$row_segment->images3;
                            $images4=$row_segment->images4;
                            $images5=$row_segment->images5;
                            $images6=$row_segment->images6;
                            $thumb = explode(("~"),$this->dataweb->thumb($images1,$images2,$images3,$images4,$images5,$images6));
                            
                            ?> 
                          <tr>
                            <td class="center" style="vertical-align:middle;">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" name="id[]" value="<?= $row_segment->id; ?>" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>
                              <div class="row">
                                  <div class="col-sm-2">
                                      <div  style="background: url(<?php echo base_url().'upload/'.$thumb[1]?>) no-repeat center;background-size: 90px; width: 100px;vertical-align: middle;height: 70px;box-shadow: 0px 0px 1px 1px grey; margin-bottom:4px;">
                                        <a class="example-image-link" href="<?php echo base_url().'upload/'.$images1?>">
                                        <img src="<?php echo base_url().'upload/foto/blank.png'?>" style="width: 100%;height: 100%;" />
                                        </a>
                                      </div>
                                  </div>
                              </div>
                            </td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->judul; ?></td>
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
                              <button type="submit" class="btn btn-sm btn-block btn-danger" onclick="return confirm('Are you sure you want to delete this content?');">Delete</button>
                          </div>
                          <div class="col-xs-2">
                              <a href="<?php echo base_url() . 'menu/add/'.$menu.'_'.$segment3.'/'.$menu.'/'.$title; ?>" class="btn btn-sm btn-block btn-success">Add</a>
                          </div>
                      </div>
                    </div><!-- /.box-body -->
                    </form><!--/form-->
                      
                  </div><!-- /.box -->
                   <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Sessions 4 </h3>
                       <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       </div>
                    </div><!-- /.box-header -->

                    <form method="POST" action="<?php echo base_url().'menu/deleteCheck/'.$menu; ?>" class="form-horizontal"><!--form-->
                    <div class="box-body">
                      <table id="example4" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th class="center" style="vertical-align:middle;" width=5px>
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                          <!--   <th width=50>Images</th> -->
                            <th>Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php foreach ( $sql_menu3_segment4 as $row_segment){ 
                            $images1=$row_segment->images;
                            $images2=$row_segment->images2;
                            $images3=$row_segment->images3;
                            $images4=$row_segment->images4;
                            $images5=$row_segment->images5;
                            $images6=$row_segment->images6;
                            $thumb = explode(("~"),$this->dataweb->thumb($images1,$images2,$images3,$images4,$images5,$images6));
                            
                            ?> 
                          <tr>
                            <td class="center" style="vertical-align:middle;">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" name="id[]" value="<?= $row_segment->id; ?>" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td style="vertical-align: middle;" align="center"><?php echo $row_segment->judul; ?></td>
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
                              <button type="submit" class="btn btn-sm btn-block btn-danger" onclick="return confirm('Are you sure you want to delete this content?');">Delete</button>
                          </div>
                          <div class="col-xs-2">
                              <a href="<?php echo base_url() . 'menu/add/'.$menu.'_'.$segment4.'/'.$menu.'/'.$title; ?>" class="btn btn-sm btn-block btn-success">Add</a>
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