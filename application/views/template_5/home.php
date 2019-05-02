
<div class="slider">    

    <div class="camera_wrap">

        <?php foreach ($sql_menu1_segment1 as $row_segment) {?>

        <div data-src="<?php echo base_url().'upload/'.$row_segment->images;?>"><div class="camera-caption fadeIn"><p class="title"><?php echo $row_segment->judul; ?></p><p class="description"><?php echo $row_segment->sub_judul ?></p></div></div>

        <?php } ?>

    </div>

</div>

<!--content-->

<div class="content"> 

<div class="thumb-box1">

    <div class="container">

        <div class="row">

        <?php foreach ( $sql_menu1_segment2 as $row_segment){ ?>    

            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp">

                <div class="thumb-pad1 maxheight">

                    <div class="thumbnail">

                        <figure><img src="<?php echo base_url().'upload/'.$row_segment->images;?>" alt=""></figure>

                        <div class="caption">

                            <p class="title"><?php echo $row_segment->judul;?></p>

                            <p><?php echo $row_segment->rangkuman;?></p>

                            <a href="#"></a>

                        </div>  

                    </div>

                </div>


            </div>

             <?php }  ?>   

        </div>

    </div>

</div>

<div class="thumb-box2">

    <div class="container">

        <div class="row">

        <?php foreach ($sql_menu1_segment3 as $row_segment ) { ?>    

            <div class="col-lg-9 wow fadeInUp">

                <p class="title"><?php echo $row_segment->judul ?></p>

                <p class="description"><?php echo $row_segment->sub_judul ?></p>

                <p><?php echo $row_segment->content ?></p>

            </div>

            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">

                <a href="<?php echo $row_segment->url  ?>" class="btn-default btn1">get involved and take action</a>

            </div>

        <?php } ?>

        </div>

    </div>

</div>

<div class="thumb-box3">

    <div class="container">

        <div class="row">

            <?php foreach ($sql_menu1_segment4 as $row_segment) { ?>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp">

                <div class="box">

                    <figure><img src="<?php echo base_url().'upload/'.$row_segment->images;?>" alt=""></figure>

                    <p class="title"><?php echo $row_segment->judul ?></p>

                    <p><?php echo $row_segment->content ?></p>

                    <a href="#"></a>

                </div>

            </div>

        <?php } ?>

        </div>

    </div>

</div>

<div class="thumb-box4">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp">

                <h2 class="indent">News and events</h2>

                <ul class="list1">

                    <?php foreach ($sql_menu1_segment5 as $row_segment) { ?>

                    <li>

                        <div class="badge"><?php echo $row_segment->sub_judul ?></div>

                        <div class="extra-wrap">

                            <h3><?php echo $row_segment->judul ?></h3>

                            <p><?php echo $row_segment->content ?></p>

                        </div>

                    </li>

                <?php } ?>

                </ul>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-6 col-lg-offset-1 wow fadeInUp" data-wow-delay="0.1s">

                <h2 class="indent">Latest Projects</h2>

                <div class="row">

                    <?php foreach ($sql_menu1_segment6 as $row_segment) {?>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">

                        <figure><a href="<?php echo $row_segment->url ?>"><i></i><img src="<?php echo base_url().'upload/'.$row_segment->images;?>" alt=""></a></figure>


                    </div>
            
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">

                        <figure><a href="<?php echo $row_segment->url ?>"><i></i><img src="<?php echo base_url().'upload/'.$row_segment->images2;?>" alt=""></a></figure>
                        

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">

                        <figure><a href="<?php echo $row_segment->url ?>"><i></i><img src="<?php echo base_url().'upload/'.$row_segment->images3;?>" alt=""></a></figure>
                        

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">

                        <figure><a href="<?php echo $row_segment->url ?>"><i></i><img src="<?php echo base_url().'upload/'.$row_segment->images4;?>" alt=""></a></figure>
                        

                    </div>

                     <?php } ?>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="stellar-section">

    <div class="thumb-box5" data-stellar-background-ratio="-0.2">

        <?php foreach ($sql_menu1_segment7 as $row_segment){?>

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 wow fadeInUp">

                    <p class="title"><?php echo $row_segment->judul ?></p>

                </div>

                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="0.1s">

                    <p class="description"><?php echo $row_segment->sub_judul ?></p>

                </div>

                <div class="col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.2s">

                    <ul class="list1-1">

                        <a href="#"><?php echo $row_segment->content ?></a>

                    </ul>

                </div>

            </div>

        </div>

    <?php } ?>

    </div>

</div>

<div class="thumb-box6">

    <div class="container">

        <?php foreach ($sql_menu1_segment8 as $row_segment) {?>

        <div class="row">

            <div class="col-lg-6 col-md-6 wow fadeInUp">

                <p class="title"><?php echo $row_segment->judul ?></p>

                <p class="description"><?php echo $row_segment->sub_judul ?></p>

                <p><?php echo $row_segment->content ?></p>

            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                <form id="newsletter" accept-charset="utf-8">

                    <div class="success">Your subscribe request has been sent!</div>

                    <label class="email">

                        <input type="email" value="">

                        <span class="error">*This is not a valid email address.</span>

                    </label>

                    <a href="#" data-type="submit" class="btn-default btn2">submit</a>

                </form>

            </div>

        </div>

    <?php } ?>

    </div>

</div>



</div>

<!--footer-->