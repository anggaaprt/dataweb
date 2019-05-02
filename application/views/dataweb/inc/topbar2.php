<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
<!--
        <li class="">
            <a href="<?= base_url('keranjang/index'); ?>">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span class="label label-danger">2</span>
            </a>
        </li>
-->

        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets'); ?>/dist/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="<?= base_url('assets'); ?>/dist/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                        <?= $_SESSION['username']; ?>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="<?php
                        if ($_SESSION['role']== 99) {
                            echo base_url() . "profile/index";
                        } else {
                           
                        }
                        ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a href="<?= base_url('dataweb/doOut'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-custom-menu -->
</div>
<!-- /.container-fluid -->
</nav>
</header>