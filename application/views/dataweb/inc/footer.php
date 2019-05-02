<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.0.1 Beta
        </div>
        <strong>Copyright &copy; 2018 <a> Data Bisnis </a></strong> 
    </div>
    <!-- /.container -->
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets'); ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets'); ?>/bootstrap/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="<?= base_url('assets'); ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets'); ?>/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets'); ?>/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url('assets'); ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url('assets'); ?>/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets'); ?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets'); ?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets'); ?>/dist/js/demo.js"></script>
<?php ($js != '') ? $this->load->view($js) : ''; ?>
</body>
</html>