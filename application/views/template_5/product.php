<div class="content indent">

    <!--content-->

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-12 col-sm-12">

                <h2>blog</h2>
                
                <?php foreach ($sql_menu4_segment1 as $row_segment) {?>
                
                <div class="thumb-pad8 wow fadeInUp">
                    

                    <div class="badge"><?php Echo $row_segment->tb_cl1?></div>

                    <div class="extra-wrap">

                        <a href="<?php echo base_url() . 'assets/template_5/' ?>" class="lnk"><?php Echo $row_segment->judul?> </a>

                        <p><span class="fa fa-user"></span>By <a href="<?php echo base_url() . 'assets/template_5/' ?>#">Admin</a> | <span class="fa fa-comments"></span>By <a href="<?php echo base_url() . 'assets/template_5/' ?>#">3 Comments</a></p>

                    </div>

                    <div class="thumbnail">

                        <figure><img src="<?php echo base_url() .'upload/'.$row_segment->images;?>" alt=""></figure>

                        <div class="caption">

                            <h3><?php Echo $row_segment->sub_judul?></h3>

                            <?php Echo $row_segment->content?>

                            <a href="<?php echo base_url() . 'assets/template_5/' ?>#" class="btn-default btn3">read more</a>

                        </div>  

                    </div>

                </div>
                
                <?php }?>
            
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">

                <div class="row">

                    <div class="col-lg-12 col-md-6 col-sm-6 wow fadeInUp">

                        <h2>Categories</h2>

                        <ul class="list5-1 indent">

                            <?php foreach ($sql_menu4_segment2 as $row_segment) {?>

                            <li><a href="<?php echo base_url() . 'assets/template_5/' ?>#"><?php Echo $row_segment->judul?></a></li>
                        
                         <?php }?>

                        </ul>

                    </div>

                    <div class="col-lg-12 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

                         <h2>RECENT POSTS</h2>

                        <?php foreach ($sql_menu4_segment3 as $row_segment) {?>
                        
                        <div class="thumb-pad9">
  
                            <div class="thumbnail">

                              <figure><img src="<?php echo base_url() .'upload/'.$row_segment->images;?>" alt=""></figure>

                                <div class="caption">

                                    <time datetime="2014-01-01"><?php Echo $row_segment->tgl?></time>

                                    <h3><?php Echo $row_segment->judul?></h3>

                                    <p><?php Echo $row_segment->content?></p>

                                </div>  

                            </div>
                        
                        </div>
                        
                        <?php }?>
                    
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>