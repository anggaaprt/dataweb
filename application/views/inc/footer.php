<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.2 Beta
    </div>
    <strong>Copyright &copy; 2017 <a>Your Name</a>.</strong> All rights
    reserved.
</footer>

</div>

<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets'); ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery 2.1.4 -->
<script src="<?= base_url('assets'); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets'); ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets'); ?>/plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets'); ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets'); ?>/plugins/fastclick/fastclick.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?= base_url('assets'); ?>/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets'); ?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets'); ?>/dist/js/demo.js"></script>
<?php ($js != '') ? $this->load->view($js) : ''; ?>
</body>
</html>
