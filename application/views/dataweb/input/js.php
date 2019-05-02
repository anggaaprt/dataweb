<script src="<?php echo base_url() . 'assets/' ?>jasny/js/jasny-bootstrap.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>jasny/js/jasny-bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>plugins/ckeditor/ckeditor.js"></script>

<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1', {
            language: 'in',
            uiColor: '#f39c12',
            // Define the toolbar groups as it is a more accessible solution.
            toolbarGroups: [
//              { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
              {"name":"basicstyles","groups":["basicstyles"]},
              {"name":"links","groups":["links"]},
              {"name":"paragraph","groups":["list","blocks"]},
              {"name":"document","groups":["mode"]},
              {"name":"insert","groups":["insert"]},
              {"name":"styles","groups":["styles"]},
              {"name":"about","groups":["about"]}
            ],
            // Remove the redundant buttons from toolbar groups defined above.\
            removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
        });
    
    
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah3')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah4')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah5')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL6(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah6')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
    $(function () {
        $("#example1").DataTable();
        
        $("#example2").DataTable();
        
        $("#example3").DataTable();
        
        $("#example4").DataTable();
        $("#example5").DataTable();
        $("#example6").DataTable();
        $("#example7").DataTable();
        $("#example8").DataTable();
        $("#example9").DataTable();
        //Initialize Select2 Elements
        $(".select2").select2();

        $("#telp").inputmask("999-999-99-9999", {"placeholder": "xxx-xxx-xx-xxxx"});

        $(".timepicker").timepicker({
            showInputs: false,
            showMeridian:false
        });
    });

</script>

<!--modal edit katpaket-->
<script type="text/javascript">

    $(document).on("click", ".open-myModalEdit", function () {

        var kode = $(this).data('kode');
        var total = $(this).data('total');


        $(".modal-body #kode").val(kode);
        $(".modal-body #total").val(total);
        $(".modal-title #kd").val(kode);
        $('#kd').text($('#kd').val());
        document.getElementById("total_dibayar").max = $('#total').val();
        document.getElementById("total_dibayar").min = $('#total').val();
    });

    $(document).on("click", ".open-myModalPesan", function () {

        var kode = $(this).data('kode');


        $(".modal-body #kode").val(kode);
        $(".modal-title #kd").val(kode);
        $('#kd').text($('#kd').val());
    });

</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tatacara"]').popover();
    });
</script>


<!--modal delete-->
<script type="text/javascript">
    $(document).on("click", ".open-myModalDelete", function () {

        var iddelete = $(this).data('iddelete');
        var nama = $(this).data('nama');

        $(".modal-body #iddelete").val(iddelete);
        $(".modal-body #nama").val(nama);
        $('#nama').text($('#nama').val());
    });
</script>

<!--modal view-->
<script type="text/javascript">

    $(document).on("click", ".open-myModalView", function () {

        var no_nota = $(this).data('no_nota');
        var kode = $(this).data('kode');
        var total = $(this).data('total');
        var bank_tujuan = $(this).data('bank_tujuan');
        var nama_bank = $(this).data('nama_bank');
        var no_rekening = $(this).data('no_rekening');
        var atas_nama = $(this).data('atas_nama');
        var alamat = $(this).data('alamat');
        var tgl_kirim = $(this).data('tgl_kirim');
        var jam_kirim = $(this).data('jam_kirim');
        var no_telp = $(this).data('no_telp');
        var img = $(this).data('img');

        $(".modal-body #no_nota").val(no_nota);
        $(".modal-body #kode").val(kode);
        $(".modal-body #total").val(total);
        $(".modal-body #bank_tujuan").val(bank_tujuan);
        $(".modal-body #nama_bank").val(nama_bank);
        $(".modal-body #no_rekening").val(no_rekening);
        $(".modal-body #atas_nama").val(atas_nama);
        $(".modal-body #alamat").val(alamat);
        $(".modal-body #tgl_kirim").val(tgl_kirim);
        $(".modal-body #jam_kirim").val(jam_kirim);
        $(".modal-body #no_telp").val(no_telp);
        $(".modal-body #img").val(img);

        $('#no_nota').text($('#no_nota').val());
        $('#totalt').text($('#total').val());
        $('#bank_tujuan').text($('#bank_tujuan').val());
        $('#nama_bank').text($('#nama_bank').val());
        $('#no_rekening').text($('#no_rekening').val());
        $('#atas_nama').text($('#atas_nama').val());
        $('#alamat').text($('#alamat').val());
        $('#tgl_kirim').text($('#tgl_kirim').val());
        $('#jam_kirim').text($('#jam_kirim').val());
        $('#no_telp').text($('#no_telp').val());

        if (img == '') {
            $(document.getElementById('gambar').src = 'http://localhost/katering/assets/upload/' + 'xxx.png');
        } else {
            $(document.getElementById('gambar').src = 'http://localhost/katering/upload/' + img);
        }
    });

</script>


<!--modal Beli-->
<script type="text/javascript">
    $(document).on("click", ".open-Beli", function () {

        var kode = $(this).data('kode');
        var nama_kategori = $(this).data('nama_kategori');
        var harga = $(this).data('harga');


        $(".modal-body #kode_katpaket").val(kode);
        $(".modal-body #nama_kategori").val(nama_kategori);
        $(".modal-body #harga").val(harga);
    });
</script>

<script>

    $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy/mm/dd',
        startDate: '+3d'
    });

    function mybank() {
        var x = document.getElementById("mySelect").value;
        if (x == 'BRI') {
            var c = '15';
            var r = true;
            var bank = 'BRI';
            var o = false;
        } else if (x == 'BCA') {
            var c = '10';
            var r = true;
            var bank = 'BCA';
            var o = false;
        } else if (x == 'BNI') {
            var c = '10';
            var r = true;
            var bank = 'BNI';
            var o = false;
        } else if (x == 'Mandiri') {
            var c = '16';
            var r = true;
            var bank = 'Mandiri';
            var o = false;
        } else if (x == '') {
            var c = '';
            var r = true;
            var bank = '';
            var o = true;
        } else {
            var c = '99';
            var r = false;
            var bank = '';
            var o = false;
        }
        document.getElementById("myTextarea").value = bank;
        document.getElementById("myTextarea").readOnly = r;
        document.getElementById("rek").readOnly = o;
        document.getElementById("rek").maxLength = true;
        document.getElementById("rek").maxLength = c;
        document.getElementById("rek").value = "";
        $("[data-mask]").inputmask();

    }



</script>

