<!DOCTYPE html>

<html lang="en">

<head>

<title>.:: DataBisnis ::.</title>

<meta charset="utf-8">    

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="<?php echo base_url() . 'assets/template_5/' ?>img/favicon.ico" type="image/x-icon">

<link rel="shortcut icon" href="<?php echo base_url() . 'assets/template_5/' ?>img/favicon.ico" type="<?php echo base_url() . 'assets/template_5/' ?>image/x-icon" />

<meta name="description" content="Your description">

<meta name="keywords" content="Your keywords">

<meta name="author" content="Your name">

<meta name = "format-detection" content = "telephone=no" />

<!--CSS-->

<link rel="stylesheet" href="<?php echo base_url() . 'assets/template_5/' ?>css/bootstrap.css" >

<link rel="stylesheet" href="<?php echo base_url() . 'assets/template_5/' ?>css/style.css">

<link rel="stylesheet" href="<?php echo base_url() . 'assets/template_5/' ?>css/animate.css">

<link rel="stylesheet" href="<?php echo base_url() . 'assets/template_5/' ?>css/camera.css">

<link rel="stylesheet" href="<?php echo base_url() . 'assets/template_5/' ?>fonts/font-awesome.css">

<!--JS-->

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/jquery.js"></script>

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/jquery-migrate-1.2.1.min.js"></script>

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/jquery.easing.1.3.js"></script>

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/jquery.mobilemenu.js"></script>

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/jquery.equalheights.js"></script> 

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/camera.js"></script>

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/sForm.js"></script>

<!--[if (gt IE 9)|!(IE)]><!-->

      <script src="<?php echo base_url() . 'assets/template_5/' ?>js/jquery.mobile.customized.min.js"></script>

<!--<![endif]-->



<script>

    $(document).ready(function(){

        jQuery('.camera_wrap').camera();

    });

</script>



<!--[if (gt IE 9)|!(IE)]><!-->

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/wow/wow.js"></script>

<script src="<?php echo base_url() . 'assets/template_5/' ?>js/wow/device.min.js"></script>

<script>

    $(document).ready(function () {       

      if ($('html').hasClass('desktop')) {

        new WOW().init();

      }   

    });

</script>

<!--<![endif]-->

<!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>



    <div id="ie6-alert" style="width: 100%; text-align:center;">

    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />

      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />

        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />

      </map>

  </div>

  <![endif]-->

</head>
<!--header-->

<header class="indent">

    <div class="follow-box">

        <div class="container"> 

            <ul class="address_icon">

                <li><img src="<?php echo base_url() . 'assets/template_5/' ?>img/page1_icon1.png" alt=""> 9870 St Vincent Place, Glasgow, DC 45 Fr 45.</li>

                <li><img src="<?php echo base_url() . 'assets/template_5/' ?>img/page1_icon2.png" alt=""> <a href="#">contact@demolink.org</a></li>

                <li><img src="<?php echo base_url() . 'assets/template_5/' ?>img/page1_icon3.png" alt=""> +1 800 559 6580</li>

            </ul>

            <ul class="follow_icon">

                <li><a href="#"><img src="<?php echo base_url() . 'assets/template_5/' ?>img/follow_icon1.png" alt=""></a></li>

                <li><a href="#"><img src="<?php echo base_url() . 'assets/template_5/' ?>img/follow_icon2.png" alt=""></a></li>

                <li><a href="#"><img src="<?php echo base_url() . 'assets/template_5/' ?>img/follow_icon3.png" alt=""></a></li>

                <li><a href="#"><img src="<?php echo base_url() . 'assets/template_5/' ?>img/follow_icon4.png" alt=""></a></li>

                <li><a href="#"><img src="<?php echo base_url() . 'assets/template_5/' ?>img/follow_icon5.png" alt=""></a></li>

            </ul>

        </div>

    </div> 

    <div class="container">  

        <h1 class="navbar-brand navbar-brand_ indent"><a href="index.html"><img src="<?php echo base_url() . 'assets/template_5/' ?>img/logo.png" alt="logo"></a></h1>      

        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">

            <ul class="nav sf-menu clearfix">

                <li class="<?php echo $menu == 'Home' ? 'active' : '' ?>"><a href="<?php echo base_url() . 'web/index' ?>">Home</a></li>

                <li class="<?php echo $menu == 'About' ? 'active' : '' ?>"><a href="<?php echo base_url() . 'web/about' ?>">About</a></li>

                <li class="<?php echo $menu == 'Gallery' ? 'active' : '' ?>"><a href="<?php echo base_url() . 'web/gallery' ?>">Gallery</a></li>

                <li class="<?php echo $menu == 'Product' ? 'active' : '' ?>"><a href="<?php echo base_url() . 'web/product' ?>">Product</a></li>

                <li class="<?php echo $menu == 'Contacts' ? 'active' : '' ?>"><a href="<?php echo base_url() . 'assets/template_5/' ?>index-4.html">Contacts</a></li>

            </ul>

        </nav> 

    </div>

</header>

