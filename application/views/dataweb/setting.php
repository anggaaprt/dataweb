<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
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
                  <?php if ($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon fa fa-check"></i> Success</strong>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                  <?php } ?>  
                  <div class="box box-warning">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                       <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       </div>
                    </div><!-- /.box-header -->
                      
                    <form method="POST" action="<?php echo base_url() . 'setting/update'; ?>" class="form-horizontal" enctype="multipart/form-data">
                      <div class="box-body">
                        <div hidden class="form-group">
                          <label class="col-sm-2 control-label">id</label>
                          <div class="col-sm-8">
                            <input readonly required type="text" name="id" value="<?php echo $id ?>" placeholder="id">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Name</label>
                          <div class="col-sm-8">
                            <input required type="text" name="nama_perusahaan" class="form-control" placeholder="Name" value="<?php echo $nama_perusahaan?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Alamat Perusahaan</label>
                          <div class="col-sm-8">
                            <textarea rows="10" cols="80" name="alamat_perusahaan" class="form-control" rows="3" placeholder="Alamat Perusahaan"><?php echo $alamat_perusahaan ?></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Map</label>
                          <div class="col-sm-8">
                            <textarea rows="5" cols="80" name="map" class="form-control" rows="3" placeholder="https://maps.google.co.in/maps? . . . ."><?php echo $map ?></textarea>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Telepon Perusahan</label>
                          <div class="col-sm-8">
                            <input  type="text" name="telp_perusahaan" class="form-control" placeholder="Telepon Perusahan" value="<?php echo $telp_perusahaan?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Fax Perusahan</label>
                          <div class="col-sm-8">
                            <input  type="text" name="fax_perusahaan" class="form-control" placeholder="Fax Perusahan" value="<?php echo $fax_perusahaan?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Email Perusahan</label>
                          <div class="col-sm-8">
                            <input  type="text" name="email_perusahaan" class="form-control" placeholder="Email Perusahan" value="<?php echo $email_perusahaan?>">
                          </div>
                        </div>
                        <hr>
                        <?php
                            if ($design !=NULL){
                                $img1=explode('.',$design);
                                $image1=$img1[0].'_thumb'.'.'.$img1[1];
                            }
                            else{
                                $image1="foto/empty.png";
                            }
                            if ($images !=NULL){
                                $img2=explode('.',$images);
                                $image2=$img2[0].'_thumb'.'.'.$img2[1];
                            }
                            else{
                                $image2="foto/empty.png";
                            }
                            ?>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Design</label>
                          <div class="col-sm-3">
                              <img id="blah" src="<?php echo base_url().'upload/'.$image1?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="300"> 
                              <br>&nbsp;
                            <input type='file' name="design" onchange="readURL(this);" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Images</label>
                          <div class="col-sm-3">
                            <img id="blah2" src="<?php echo base_url().'upload/'.$image2?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="300"> 
                              <br>&nbsp;
                            <input type='file' name="images" onchange="readURL2(this);" />
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Link 1</label>
                          <div class="col-sm-8">
                            <input  type="text" name="link_1" class="form-control" placeholder="Link 1" value="<?php echo $link_1?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Link 2</label>
                          <div class="col-sm-8">
                            <input  type="text" name="link_2" class="form-control" placeholder="Link 2" value="<?php echo $link_2?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Link 3</label>
                          <div class="col-sm-8">
                            <input  type="text" name="link_3" class="form-control" placeholder="Link 3" value="<?php echo $link_3?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Link 4</label>
                          <div class="col-sm-8">
                            <input  type="text" name="link_4" class="form-control" placeholder="Link 4" value="<?php echo $link_4?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Link 5</label>
                          <div class="col-sm-8">
                            <input  type="text" name="link_5" class="form-control" placeholder="Link 5" value="<?php echo $link_5?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Link 6</label>
                          <div class="col-sm-8">
                            <input  type="text" name="link_6" class="form-control" placeholder="Link 6" value="<?php echo $link_6?>">
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">ym_id_1</label>
                          <div class="col-sm-8">
                            <input  type="text" name="ym_id_1" class="form-control" placeholder="ym_id_1 " value="<?php echo $ym_id_1?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">ym_id_2</label>
                          <div class="col-sm-8">
                            <input  type="text" name="ym_id_2" class="form-control" placeholder="ym_id_2 " value="<?php echo $ym_id_2?>">
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Username</label>
                          <div class="col-sm-8">
                            <input  type="text" name="username" class="form-control" placeholder="Username " value="<?php echo $username?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Password</label>
                          <div class="col-sm-8">
                            <input  type="password" name="password" class="form-control" placeholder="Password " value="<?php echo $password?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Real Password</label>
                          <div class="col-sm-8">
                            <input readonly type="text" name="real_pswd" class="form-control" placeholder="Real Password " value="<?php echo $real_pswd?>">
                          </div>
                        </div>
                      </div><!-- /.box-body -->
                      <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Update</button>
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