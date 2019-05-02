<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
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
                      
                    <?php 
                        if ($aksi == 'edit'){
                            $link  = 'menu/menu_update';
                            $btn  = 'Update';
                        }else{
                            $link  = 'menu/menu_save';
                            $btn  = 'Simpan';
                        }
                    ?>
                      
                    <form method="POST" action="<?php echo base_url() . $link; ?>" class="form-horizontal" enctype="multipart/form-data">
                      <div class="box-body">
                          
                          <table class="table table-striped">
                            <tr>
                              <td style="width: 30%"><label class="control-label">Form Name</label></td>
                              <td colspan="2">
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input required type="text" name="form_name" class="form-control" placeholder="Form Name" value="<?php echo $form_name ?>">
                                      </div>
                                    </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Title</label></td>
                              <td style="width: 40%">
                                  <div class="form-group">
                                      <div class="col-sm-2">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckTitle" onclick="mytitle()" required type="checkbox" value="1" <?php echo $judul ?> name="title"> Show
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="title" style="display:<?php echo $txt_block_title?>" required type="text" name="txt_title" class="form-control" placeholder="title" value="<?php echo $txt_title?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Creator</label></td>
                              <td>
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                        <select id="mySelectCreator" onchange="mycreator()" name="creator" class="form-control select2" style="width: 100%;">
                                          <option hidden="hidden" value="<?php echo $val; ?>" selected="selected"><?php echo $creator; ?></option>
                                            <?php echo $un ?>
                                            <?php foreach ($menu_segment as $row_menu_segment){ ?>
                                              <option value="<?php echo $row_menu_segment->id; ?>"><?php echo $row_menu_segment->form_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="creator" style="display:<?php echo $txt_block_creator?>" required type="text" name="txt_creator" class="form-control" placeholder="txt_creator" value="<?php echo $txt_creator?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Title Page</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckTitlePage" onclick="mytitlepage()" type="checkbox" value="1" <?php echo $sub_judul ?> name="sub_judul"> Show
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="titlepage" style="display:<?php echo $txt_block_sub_judul?>" required type="text" name="txt_sub_judul" class="form-control" placeholder="txt_sub_judul" value="<?php echo $txt_sub_judul?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Summary</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckSummary" onclick="mysummary()" type="checkbox" value="1" <?php echo $rangkuman ?> name="rangkuman"> Show
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="summary" style="display:<?php echo $txt_block_summary?>" required type="text" name="txt_rangkuman" class="form-control" placeholder="txt_summary" value="<?php echo $txt_summary?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Content</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckContent" onclick="mycontent()" type="checkbox" value="1" <?php echo $content ?> name="content"> Show
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="content" style="display:<?php echo $txt_block_content?>" required type="text" name="txt_content" class="form-control" placeholder="txt_content" value="<?php echo $txt_content?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Images 1</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckImage1" onclick="myimage1()" type="checkbox" value="1" <?php echo $images1 ?> name="images1"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="image1" style="display:<?php echo $txt_block_image1?>" required type="text" name="txt_image1" class="form-control" placeholder="txt_image1" value="<?php echo $txt_image1?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Images 2</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckImage2" onclick="myimage2()" type="checkbox" value="1" <?php echo $images2 ?> name="images2"> Show
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="image2" style="display:<?php echo $txt_block_image2?>" required type="text" name="txt_image2" class="form-control" placeholder="txt_image2" value="<?php echo $txt_image2?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Images 3</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckImage3" onclick="myimage3()" type="checkbox" value="1" <?php echo $images3 ?> name="images3"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="image3" style="display:<?php echo $txt_block_image3?>" required type="text" name="txt_image3" class="form-control" placeholder="txt_image3" value="<?php echo $txt_image3?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Images 4</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckImage4" onclick="myimage4()" type="checkbox" value="1" <?php echo $images4 ?> name="images4"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="image4" style="display:<?php echo $txt_block_image4?>" required type="text" name="txt_image4" class="form-control" placeholder="txt_image4" value="<?php echo $txt_image4?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Images 5</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckImage5" onclick="myimage5()" type="checkbox" value="1" <?php echo $images5 ?> name="images5"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="image5" style="display:<?php echo $txt_block_image5?>" required type="text" name="txt_image5" class="form-control" placeholder="txt_image5" value="<?php echo $txt_image5?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Images 6</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckImage6" onclick="myimage6()" type="checkbox" value="1" <?php echo $images6 ?> name="images6"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="image6" style="display:<?php echo $txt_block_image6?>" required type="text" name="txt_image6" class="form-control" placeholder="txt_image6" value="<?php echo $txt_image6?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Date</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckTgl" onclick="mytgl()" type="checkbox" value="1" <?php echo $tgl ?> name="tgl"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="tgl" style="display:<?php echo $txt_block_date?>" required type="text" name="txt_tgl" class="form-control" placeholder="txt_tgl" value="<?php echo $txt_date?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Url 1</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckUrl1" onclick="myurl1()" type="checkbox" value="1" <?php echo $url1 ?> name="url1"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="url1" style="display:<?php echo $txt_block_url1?>" required type="text" name="txt_url1" class="form-control" placeholder="txt_url1" value="<?php echo $txt_url1?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Url 2</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckUrl2" onclick="myurl2()" type="checkbox" value="1" <?php echo $url2 ?> name="url2"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="url2" style="display:<?php echo $txt_block_url2?>" required type="text" name="txt_url2" class="form-control" placeholder="txt_url2" value="<?php echo $txt_url2?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Url 3</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckUrl3" onclick="myurl3()" type="checkbox" value="1" <?php echo $url3 ?> name="url3"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="url3" style="display:<?php echo $txt_block_url3?>" required type="text" name="txt_url3" class="form-control" placeholder="txt_url3" value="<?php echo $txt_url3?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">tb_cl1</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheck_tb_cl1" onclick="mytb_cl1()" type="checkbox" value="1" <?php echo $tb_cl1 ?> name="tb_cl1"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="tb_cl1" style="display:<?php echo $txt_block_tb_cl1?>" required type="text" name="txt_tb_cl1" class="form-control" placeholder="txt_tb_cl1" value="<?php echo $txt_tb_cl1?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">tb_cl2</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheck_tb_cl2" onclick="mytb_cl2()" type="checkbox" value="1" <?php echo $tb_cl2 ?> name="tb_cl2"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="tb_cl2" style="display:<?php echo $txt_block_tb_cl2?>" required type="text" name="txt_tb_cl2" class="form-control" placeholder="txt_tb_cl2" value="<?php echo $txt_tb_cl2?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">tb_cl3</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheck_tb_cl3" onclick="mytb_cl3()" type="checkbox" value="1" <?php echo $tb_cl3 ?> name="tb_cl3"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="tb_cl3" style="display:<?php echo $txt_block_tb_cl3?>" required type="text" name="txt_tb_cl3" class="form-control" placeholder="txt_tb_cl3" value="<?php echo $txt_tb_cl3?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">tb_cl4</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheck_tb_cl4" onclick="mytb_cl4()" type="checkbox" value="1" <?php echo $tb_cl4 ?> name="tb_cl4"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="tb_cl4" style="display:<?php echo $txt_block_tb_cl4?>" required type="text" name="txt_tb_cl4" class="form-control" placeholder="txt_tb_cl4" value="<?php echo $txt_tb_cl4?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">tb_cl5</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheck_tb_cl5" onclick="mytb_cl5()" type="checkbox" value="1" <?php echo $tb_cl5 ?> name="tb_cl5"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="tb_cl5" style="display:<?php echo $txt_block_tb_cl5?>" required type="text" name="txt_tb_cl5" class="form-control" placeholder="txt_tb_cl5" value="<?php echo $txt_tb_cl5?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">tb_cl6</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheck_tb_cl6" onclick="mytb_cl6()" type="checkbox" value="1" <?php echo $tb_cl6 ?> name="tb_cl6"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="tb_cl6" style="display:<?php echo $txt_block_tb_cl6?>" required type="text" name="txt_tb_cl6" class="form-control" placeholder="txt_tb_cl6" value="<?php echo $txt_tb_cl6?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">tb_cl7</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheck_tb_cl7" onclick="mytb_cl7()" type="checkbox" value="1" <?php echo $tb_cl7 ?> name="tb_cl7"> Show 
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="tb_cl7" style="display:<?php echo $txt_block_tb_cl7?>" required type="text" name="txt_tb_cl7" class="form-control" placeholder="txt_tb_cl7" value="<?php echo $txt_tb_cl7?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="width: 30%"><label class="control-label">Status</label></td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input id="myCheckStatus" onclick="mystatus()" type="checkbox" value="1" <?php echo $status ?> name="status"> Show
                                          </label>
                                        </div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                        <input id="status" style="display:<?php echo $txt_block_status?>" required type="text" name="txt_status" class="form-control" placeholder="txt_status" value="<?php echo $txt_status?>">
                                      </div>
                                  </div>
                              </td>
                            </tr>
                            <tr hidden>
                              <td><label class="control-label">id</label></td>
                              <td>
                                <div class="form-group">
                                  <div class="col-sm-8">
                                    <input type="text" name="id" placeholder="id" value="<?php echo $id ?>">
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </table>
                      </div><!-- /.box-body -->
                        
                    <div class="box-footer">
                        <a class="btn btn-default">Cancel</a>
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