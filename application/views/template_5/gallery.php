<div class="content indent">

    <!--content-->

    <div class="thumb-box10">
 
        <div class="container">

            <?php foreach ($sql_menu3_segment1 as $row_segment) {?>       

            <h2 class="wow fadeIn"><?php Echo $row_segment->sub_judul?></h2> <?php } ?>


            <div class="row">

            <?php foreach ($sql_menu3_segment1 as $row_segment) {?>  
               
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp">

                    <div class="thumb-pad6 maxheight">

                        <div class="thumbnail">

                            <figure><img src="<?php echo base_url() .'upload/'.$row_segment->images;?>" alt=""></figure>

                            <div class="caption">

                                <p class="title"><?php Echo $row_segment->judul?></p>

                                <p><?php Echo $row_segment->content?></p>

                                <a href="<?php echo base_url() . 'assets/template_5/' ?>#"></a>

                            </div>  

                        </div>

                    </div>

                </div>
            
               <?php } ?>  
            
            </div>

       

        </div>

    </div>

    <div class="thumb-box11">

        <?php foreach ($sql_menu3_segment2 as $row_segment) {?>


        <div class="container">

            <h2 class="wow fadeIn"><?php Echo $row_segment->judul?></h2>

            <div class="thumb-pad7 wow fadeInUp">

                <div class="thumbnail">

                    <figure><img src="<?php echo base_url() .'upload/'.$row_segment->images;?>" alt=""></figure>

                    <div class="caption">

                        <h3><?php Echo $row_segment->sub_judul?></h3>

                        <p><?php Echo $row_segment->content?></p>

                        <ul class="list5-1">

                            <li><a href="<?php echo base_url() . 'assets/template_5/' ?>#"><?php Echo $row_segment->url?></a></li>

                            <li><a href="<?php echo base_url() . 'assets/template_5/' ?>#"><?php Echo $row_segment->url2?></a></li>

                            <li><a href="<?php echo base_url() . 'assets/template_5/' ?>#"><?php Echo $row_segment->url3?></a></li>

                        </ul>

                        <a href="<?php echo base_url() . 'assets/template_5/' ?>#" class="btn-default btn3">read more</a>

                    </div>  

                </div>

            </div>

        </div>

    <?php } ?>

    </div>

    <div class="thumb-box12">

        <div class="container">

            <div class="row">

            <?php foreach ($sql_menu3_segment3 as $row_segment) {?>

                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp">

                <h2><?php echo $row_segment->judul ?></h2>

                    <div class="thumb-pad4">

                        <div class="thumbnail">

                            <figure><img src="<?php echo base_url() .'upload/'.$row_segment->images;?>" alt=""></figure>

                            <div class="caption">

                                <h3><?php Echo $row_segment->sub_judul?></h3>

                                <p><?php Echo $row_segment->content?></p>

                                <a href="<?php echo base_url() . 'assets/template_5/' ?>#" class="btn-default btn3">read more</a>

                            </div>  

                        </div>

                    </div>
                </div>
             <?php }?>
        </div>
    </div>
</div>

    <div class="thumb-box13">

        <div class="container">

            <div class="row">

                <?php foreach ($sql_menu3_segment4 as $row_segment) {?>

                <div class="col-lg-9 wow fadeInUp">

                    <p class="title"><?php Echo $row_segment->judul?></p>

                    <p><?php Echo $row_segment->content?></p>

                </div>

                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">

                    <a href="<?php echo base_url() . 'assets/template_5/' ?>#" class="btn-default btn1"><?php Echo $row_segment->url?></a>

                </div>

            <?php }?>

            </div>

        </div>

    </div>
</div>

