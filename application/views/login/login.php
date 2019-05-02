<div class="login-box">
    <div class="login-logo">
        <a href="#"><b><?php echo $title ?></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in</p>
        <?php if ($this->session->flashdata('gagallogin')) { ?>
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong>
                <?php echo $this->session->flashdata('gagallogin'); ?>
            </div>
        <?php } ?>

        <?php if ($this->session->flashdata('gagal')) { ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong>
                <?php echo $this->session->flashdata('gagal'); ?>
            </div>
        <?php } ?>

        <form id="xfrm" method="POST">
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Username">
                <span class="fa fa-at form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-6 btn-block">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
            <center>
            </center>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
