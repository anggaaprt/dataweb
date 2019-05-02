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
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                       <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       </div>
                    </div><!-- /.box-header -->
                    
                    <?php 
                        if ($aksi == 'edit'){
                            $link  = 'menu/update';
                            $btn  = 'Update';
                        }else{
                            $link  = 'menu/save';
                            $btn  = 'Simpan';
                        }
                    ?>
                      
                    <form method="POST" action="<?php echo base_url() . $link; ?>" class="form-horizontal" enctype="multipart/form-data">
                      <div class="box-body">
                        <div hidden="" class="form-group">
                          <label class="col-sm-2 control-label">id</label>
                          <div class="col-sm-8">
                            <input type="text" name="id" value="<?php echo $id ?>" placeholder="id">
                            <input type="text" name="form_name"  placeholder="id" value="<?php echo $frm_segment ?>">
                            <input type="text" name="menu"  placeholder="id" value="<?php echo $menu ?>">
                          </div>
                        </div>
                        <div <?php echo $hjudul ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_title?></label>
                          <div class="col-sm-8">
                            <input required type="text" name="judul" class="form-control" placeholder="title" value="<?php echo $judul ?>">
                          </div>
                        </div>
                        <div <?php echo $hcreator ?> class="form-group">
                            <label class="col-sm-2 control-label"><?php echo $txt_creator?></label>
                            <div class="col-sm-8">
                                <select <?php echo $required; ?> name="creator" class="form-control select2" style="width: 100%;">
                                  <option hidden="hidden" value="<?php echo $val; ?>" selected="selected"><?php echo $creator; ?></option>
                                    <?php echo $un ?>
                                    <?php foreach ($sqlcreator as $row_creator){ ?>
                                      <option value="<?php echo $row_creator->id; ?>"><?php echo $row_creator->judul; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div <?php echo $hdate ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_date?></label>
                          <div class="col-sm-8">
                            <input type="date" name="tgl" class="form-control" placeholder="date" value="<?php echo $date ?>">
                          </div>
                        </div>
                        <div <?php echo $hurl1 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_url1?></label>
                          <div class="col-sm-8">
                            <input type="text" name="url1" class="form-control" placeholder="url" value="<?php echo $url1 ?>">
                          </div>
                        </div>
                        <div <?php echo $hurl2 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_url2?></label>
                          <div class="col-sm-8">
                            <input type="text" name="url2" class="form-control" placeholder="url2" value="<?php echo $url2 ?>">
                          </div>
                        </div>
                        <div <?php echo $hurl3 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_url3?></label>
                          <div class="col-sm-8">
                            <input type="text" name="url3" class="form-control" placeholder="url3" value="<?php echo $url3 ?>">
                          </div>
                        </div>
                        <div <?php echo $hsub_judul ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_sub_judul?></label>
                          <div class="col-sm-8">
                            <input type="text" name="sub_judul" class="form-control" placeholder="title page" value="<?php echo $sub_judul ?>">
                          </div>
                        </div>
                        <div <?php echo $hrangkuman ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_summary?></label>
                          <div class="col-sm-8">
                            <textarea rows="10" cols="80" name="rangkuman" class="form-control" rows="3" placeholder="Enter ..."><?php echo $rangkuman ?></textarea>
                          </div>
                        </div>
                        <div <?php echo $hcontent ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_content?></label>
                          <div class="col-sm-8">
                            <textarea id="editor1" rows="10" cols="80" name="content" class="form-control" rows="3" placeholder="Enter ..."><?php echo $content ?></textarea>
                          </div>
                        </div>
                        <?php
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
                        <div <?php echo $himages1 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_image1?></label>
                          <div class="col-sm-2">
                            <img id="blah" src="<?php echo base_url().'upload/'.$image1?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="300"> 
                              <br>&nbsp;
                            <input type='file' name="images" onchange="readURL(this);" />
                          </div>
                        </div>
                        <div <?php echo $himages2 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_image2?></label>
                          <div class="col-sm-2">
                            <img id="blah2" src="<?php echo base_url().'upload/'.$image2?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="300"> 
                              <br>&nbsp;
                            <input type='file' name="images2" onchange="readURL2(this);" />
                          </div>
                        </div>
                        <div <?php echo $himages3 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_image3?></label>
                          <div class="col-sm-2">
                            <img id="blah3" src="<?php echo base_url().'upload/'.$image3?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="300"> 
                              <br>&nbsp;
                            <input type='file' name="images3" onchange="readURL3(this);" />
                          </div>
                        </div>
                        <div <?php echo $himages4 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_image4?></label>
                          <div class="col-sm-2">
                            <img id="blah4" src="<?php echo base_url().'upload/'.$image4?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="300"> 
                              <br>&nbsp;
                            <input type='file' name="images4" onchange="readURL4(this);" />
                          </div>
                        </div>
                        <div <?php echo $himages5 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_image5?></label>
                          <div class="col-sm-2">
                            <img id="blah5" src="<?php echo base_url().'upload/'.$image5?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="300"> 
                              <br>&nbsp;
                            <input type='file' name="images5" onchange="readURL5(this);" />
                          </div>
                        </div>
                        <div <?php echo $himages6 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_image6?></label>
                          <div class="col-sm-2">
                            <img id="blah6" src="<?php echo base_url().'upload/'.$image6?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="300"> 
                              <br>&nbsp;
                            <input type='file' name="images6" onchange="readURL6(this);" />
                          </div>
                        </div>
                        <div <?php echo $htb_cl1 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_tb_cl1?></label>
                          <div class="col-sm-8">
                            <input type="text" name="tb_cl1" class="form-control" placeholder="tb_cl1" value="<?php echo $tb_cl1 ?>">
                          </div>
                        </div>
                        <div <?php echo $htb_cl2 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_tb_cl2?></label>
                          <div class="col-sm-8">
                            <input type="text" name="tb_cl2" class="form-control" placeholder="tb_cl2" value="<?php echo $tb_cl2 ?>">
                          </div>
                        </div>
                        <div <?php echo $htb_cl3 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_tb_cl3?></label>
                          <div class="col-sm-8">
                            <input type="text" name="tb_cl3" class="form-control" placeholder="tb_cl3" value="<?php echo $tb_cl3 ?>">
                          </div>
                        </div>
                        <div <?php echo $htb_cl4 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_tb_cl4?></label>
                          <div class="col-sm-8">
                            <input type="text" name="tb_cl4" class="form-control" placeholder="tb_cl4" value="<?php echo $tb_cl4 ?>">
                          </div>
                        </div>
                        <div <?php echo $htb_cl5 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_tb_cl5?></label>
                          <div class="col-sm-8">
                            <input type="text" name="tb_cl5" class="form-control" placeholder="tb_cl5" value="<?php echo $tb_cl5 ?>">
                          </div>
                        </div>
                        <div <?php echo $htb_cl6 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_tb_cl6?></label>
                          <div class="col-sm-8">
                            <input type="text" name="tb_cl6" class="form-control" placeholder="tb_cl6" value="<?php echo $tb_cl6 ?>">
                          </div>
                        </div>
                        <div <?php echo $htb_cl7 ?> class="form-group">
                          <label class="col-sm-2 control-label"><?php echo $txt_tb_cl7?></label>
                          <div class="col-sm-8">
                            <input type="text" name="tb_cl7" class="form-control" placeholder="tb_cl7" value="<?php echo $tb_cl7 ?>">
                          </div>
                        </div>
                        <div <?php echo $hstatus ?> class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" <?php echo $status ?> value="1" name="status"> <?php echo $txt_status?>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.box-body -->
                        
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo base_url().'menusegment/cancel/'.$menu; ?>">Back</a>
                        <button type="submit" class="btn btn-info pull-right"><?php echo $btn ?></button>
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