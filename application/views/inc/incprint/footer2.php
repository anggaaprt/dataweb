</div>

<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets'); ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
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
<!-- AdminLTE App -->
<script src="<?= base_url('assets'); ?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets'); ?>/dist/js/demo.js"></script>
<?php ($js != '') ? $this->load->view($js) : ''; ?>
</body>
</html>
