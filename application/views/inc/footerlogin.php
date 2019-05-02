<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets');?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets');?>/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url('assets');?>/plugins/iCheck/icheck.min.js"></script>
<?php ($js != '') ? $this->load->view($js) : ''; ?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
