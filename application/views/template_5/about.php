<div class="content indent">

    <!--content-->

    <div class="who-box">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp">

                    <?php foreach ($sql_menu2_segment1 as $row_segment) {?>

                    <h2><?php Echo $row_segment->judul?></h2>

                    <div class="thumb-pad4">

                        <div class="thumbnail">

                            <figure><img src="<?php echo base_url() .'upload/'.$row_segment->images;?>" alt=""></figure>

                            <div class="caption">

                                <h3><?php Echo $row_segment->sub_judul?></h3>

                                <p><?php Echo $row_segment->content?> </p>

                                <a href="<?php echo base_url() . 'assets/template_5/' ?>#" class="btn-default btn3">read more</a>

                            </div>  

                        </div>

                    </div>

                <?php }?>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

                     <?php foreach ($sql_menu2_segment2 as $row_segment) {?>

                    <h2><?php Echo $row_segment->judul?></h2>

                    <h3><?php Echo $row_segment->sub_judul?></h3>

                    <p><?php Echo $row_segment->content?></p>

                    <p> </p>

                   

                    <p><?php Echo $row_segment->rangkuman?></p>

                <?php } ?>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">

                    <h2>why choose us</h2>

                    <ul class="list6">

                        <?php foreach ($sql_menu2_segment3 as $row_segment) {?>

                        <li>

                            <span><?php Echo $row_segment->rangkuman?></span>

                            <div class="extra-wrap">

                                <h3><?php Echo $row_segment->judul?></h3>

                                <p><?php Echo $row_segment->content?></p>

                            </div>
                        </li>

                    <?php } ?>

                    </ul>

                </div>

            </div>

        </div>

    </div> 

    <div class="thumb-box8">

        <div class="container">

            <?php foreach ($sql_menu2_segment4 as $row_segment) {?>

            <h2 class="wow fadeIn"><?php Echo $row_segment->judul?></h2>  <?php } ?>

            <div class="row">
                
                <?php foreach ($sql_menu2_segment4 as $row_segment) {?>
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp">

                    <div class="thumb-pad5 maxheight">

                        <div class="thumbnail">

                            <figure><img src="<?php echo base_url() .'upload/'.$row_segment->images;?>" alt=""></figure>

                            <div class="caption">

                                <a href="<?php echo base_url() . 'assets/template_5/' ?>#"><?php Echo $row_segment->sub_judul?></a>

                                <p><?php Echo $row_segment->content?></p>

                            </div>

                        </div>

                    </div>

                </div>

           <?php } ?>
            
        </div>

        </div>

    </div>
 

    <div class="thumb-box9">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp">

                     <?php foreach ($sql_menu2_segment5 as $row_segment) {?>

                    <h2><?php Echo $row_segment->judul?></h2><?php }?>  

                      <?php foreach ($sql_menu2_segment5 as $row_segment) {?>

                   <ul class="list7">

                        <li>

                            <span class="fa fa-thumbs-o-up"></span>

                            <div class="extra-wrap">

                                <h3><?php Echo $row_segment->sub_judul?></h3>

                                <p><?php Echo $row_segment->content?></p>

                            </div>

                        </li>

                    </ul>
                    
                    <?php }?>   
                
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

                    <?php foreach ($sql_menu2_segment6 as $row_segment) {?>

                    <h2><?php Echo $row_segment->judul?></h2>

                    <?php }?>

                    <?php foreach ($sql_menu2_segment6 as $row_segment) {?>

                    <h3><?php Echo $row_segment->sub_judul?></h3>

                    <p><?php Echo $row_segment->content?> </p>

                    <?php }?>
                   
                </div>

                <div class="col-lg-5 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">

                     <?php foreach ($sql_menu2_segment7 as $row_segment) {?>

                    <h2>Testimonials</h2>

                    <div class="thumb-pad2">

                        <div class="thumbnail">

                            <figure><img src="<?php echo base_url() .'upload/'.$row_segment->images;?>" alt=""></figure>

                            <div class="caption">

                                <p><?php Echo $row_segment->content?></p>

                                <a href="<?php echo base_url() . 'assets/template_5/' ?>#"><?php Echo $row_segment->sub_judul?></a>

                            </div>  

                        </div>

                    </div>

                <?php }?>

                </div>

            </div>

        </div>

    </div>

</div>