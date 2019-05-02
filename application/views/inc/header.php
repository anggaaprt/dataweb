<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cathering Bu Oom | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/ionicons.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/select2/select2.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/skins/_all-skins.min.css">
        <?php ($css != '') ? $this->load->view($css) : ''; ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">