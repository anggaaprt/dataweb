<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?= base_url('menu/menu'); ?>" class="navbar-brand"><b>DATA</b>  WEB</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo $menu == 'menu1' ? 'active' : '' ?>"><a href="<?= base_url('menusegment/menu1'); ?>">Home</a></li>
            <li class="<?php echo $menu == 'menu2' ? 'active' : '' ?>"><a href="<?= base_url('menusegment/menu2'); ?>">About</a></li>
            <li class="<?php echo $menu == 'menu3' ? 'active' : '' ?>"><a href="<?= base_url('menusegment/menu3'); ?>">Gallery</a></li>
            <li class="<?php echo $menu == 'menu4' ? 'active' : '' ?>"><a href="<?= base_url('menusegment/menu4'); ?>">Product</a></li>
            <li class="<?php echo $menu == 'menu7' ? 'active' : '' ?>"><a href="<?= base_url('menusegment/menu7'); ?>">Testimony</a></li>
            <li class="dropdown <?php echo menuControler('setting'); ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?= base_url('setting'); ?>">Setting 1</a></li>
                <li class="divider"></li>
                <li><a href="#">Setting 2</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        