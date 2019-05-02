<script src="<?php echo base_url() . 'assets/' ?>jasny/js/jasny-bootstrap.js"></script>
<script src="<?php echo base_url() . 'assets/' ?>jasny/js/jasny-bootstrap.min.js"></script>
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
        $("#simple-table").DataTable();
        $("#simple-table1").DataTable();
        //Initialize Select2 Elements
        $(".select2").select2();

        $("#telp").inputmask("999-999-99-9999", {"placeholder": "xxx-xxx-xx-xxxx"});

        $(".timepicker").timepicker({
            showInputs: false,
            showMeridian:false
        });
    });
    
    var active_class = 'active';
//    example1
    $('#example1 > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header

        $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
            else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
        });
    });

    //select/deselect a row when the checkbox is checked/unchecked
    $('#example1').on('click', 'td input[type=checkbox]' , function(){
        var $row = $(this).closest('tr');
        if(this.checked) $row.addClass(active_class);
        else $row.removeClass(active_class);
    });
//   example2
    $('#example2 > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header

        $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
            else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
        });
    });

    //select/deselect a row when the checkbox is checked/unchecked
    $('#example2').on('click', 'td input[type=checkbox]' , function(){
        var $row = $(this).closest('tr');
        if(this.checked) $row.addClass(active_class);
        else $row.removeClass(active_class);
    });
    
    
    $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header

        $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
            else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
        });
    });

    //select/deselect a row when the checkbox is checked/unchecked
    $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
        var $row = $(this).closest('tr');
        if(this.checked) $row.addClass(active_class);
        else $row.removeClass(active_class);
    });
    
    $('#simple-table1 > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header

        $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
            else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
        });
    });

    //select/deselect a row when the checkbox is checked/unchecked
    $('#simple-table1').on('click', 'td input[type=checkbox]' , function(){
        var $row = $(this).closest('tr');
        if(this.checked) $row.addClass(active_class);
        else $row.removeClass(active_class);
    });

</script>



<!--checkbox-->
<script>
    function mytitle() {
        var checkBox = document.getElementById("myCheckTitle");
        var title = document.getElementById("title");
        if (checkBox.checked == true){
            title.style.display = "block";
        } else {
            title.style.display = "none";
            title.value = "Title";
        }
    }
    
    function mycreator() {
        var checkBox = document.getElementById("mySelectCreator");
        var creator = document.getElementById("creator");
        if (checkBox.value == 0){
            creator.style.display = "none";
            creator.value = "Creator";
        } else {
            creator.style.display = "block";
        }
    }
    
    function mytitlepage() {
        var checkBox = document.getElementById("myCheckTitlePage");
        var titlepage = document.getElementById("titlepage");
        if (checkBox.checked == true){
            titlepage.style.display = "block";
        } else {
            titlepage.style.display = "none";
            titlepage.value = "Title Page";
        }
    }
    
    function mysummary() {
        var checkBox = document.getElementById("myCheckSummary");
        var summary = document.getElementById("summary");
        if (checkBox.checked == true){
            summary.style.display = "block";
        } else {
            summary.style.display = "none";
            summary.value = "Summary";
        }
    }
    
    function mycontent() {
        var checkBox = document.getElementById("myCheckContent");
        var content = document.getElementById("content");
        if (checkBox.checked == true){
            content.style.display = "block";
        } else {
            content.style.display = "none";
            content.value = "Content";
        }
    }
    
    function myimage1() {
        var checkBox = document.getElementById("myCheckImage1");
        var image1 = document.getElementById("image1");
        if (checkBox.checked == true){
            image1.style.display = "block";
        } else {
            image1.style.display = "none";
            image1.value = "Images 1";
        }
    }
    
    function myimage2() {
        var checkBox = document.getElementById("myCheckImage2");
        var image2 = document.getElementById("image2");
        if (checkBox.checked == true){
            image2.style.display = "block";
        } else {
            image2.style.display = "none";
            image2.value = "Images 2";
        }
    }
    
    function myimage3() {
        var checkBox = document.getElementById("myCheckImage3");
        var image3 = document.getElementById("image3");
        if (checkBox.checked == true){
            image3.style.display = "block";
        } else {
            image3.style.display = "none";
            image3.value = "Images 3";
        }
    }
    
    function myimage4() {
        var checkBox = document.getElementById("myCheckImage4");
        var image4 = document.getElementById("image4");
        if (checkBox.checked == true){
            image4.style.display = "block";
        } else {
            image4.style.display = "none";
            image4.value = "Images 4";
        }
    }
    
    function myimage5() {
        var checkBox = document.getElementById("myCheckImage5");
        var image5 = document.getElementById("image5");
        if (checkBox.checked == true){
            image5.style.display = "block";
        } else {
            image5.style.display = "none";
            image5.value = "Images 5";
        }
    }
    
    function myimage6() {
        var checkBox = document.getElementById("myCheckImage6");
        var image6 = document.getElementById("image6");
        if (checkBox.checked == true){
            image6.style.display = "block";
        } else {
            image6.style.display = "none";
            image6.value = "Images 6";
        }
    }
    
    function mytgl() {
        var checkBox = document.getElementById("myCheckTgl");
        var tgl = document.getElementById("tgl");
        if (checkBox.checked == true){
            tgl.style.display = "block";
        } else {
            tgl.style.display = "none";
            tgl.value = "Date";
        }
    }
    
    function myurl1() {
        var checkBox = document.getElementById("myCheckUrl1");
        var url1 = document.getElementById("url1");
        if (checkBox.checked == true){
            url1.style.display = "block";
        } else {
            url1.style.display = "none";
            url1.value = "Url 1";
        }
    }
    
    function myurl2() {
        var checkBox = document.getElementById("myCheckUrl2");
        var url2 = document.getElementById("url2");
        if (checkBox.checked == true){
            url2.style.display = "block";
        } else {
            url2.style.display = "none";
            url2.value = "Url 2";
        }
    }
    
    function myurl3() {
        var checkBox = document.getElementById("myCheckUrl3");
        var url3 = document.getElementById("url3");
        if (checkBox.checked == true){
            url3.style.display = "block";
        } else {
            url3.style.display = "none";
            url3.value = "Url 3";
        }
    }
    
    function mytb_cl1() {
        var checkBox = document.getElementById("myCheck_tb_cl1");
        var tb_cl1 = document.getElementById("tb_cl1");
        if (checkBox.checked == true){
            tb_cl1.style.display = "block";
        } else {
            tb_cl1.style.display = "none";
            tb_cl1.value = "tb_cl1";
        }
    }
    
    function mytb_cl2() {
        var checkBox = document.getElementById("myCheck_tb_cl2");
        var tb_cl2 = document.getElementById("tb_cl2");
        if (checkBox.checked == true){
            tb_cl2.style.display = "block";
        } else {
            tb_cl2.style.display = "none";
            tb_cl2.value = "tb_cl2";
        }
    }
    
    function mytb_cl3() {
        var checkBox = document.getElementById("myCheck_tb_cl3");
        var tb_cl3 = document.getElementById("tb_cl3");
        if (checkBox.checked == true){
            tb_cl3.style.display = "block";
        } else {
            tb_cl3.style.display = "none";
            tb_cl3.value = "tb_cl3";
        }
    }
    
    function mytb_cl4() {
        var checkBox = document.getElementById("myCheck_tb_cl4");
        var tb_cl4 = document.getElementById("tb_cl4");
        if (checkBox.checked == true){
            tb_cl4.style.display = "block";
        } else {
            tb_cl4.style.display = "none";
            tb_cl4.value = "tb_cl4";
        }
    }
    
    function mytb_cl5() {
        var checkBox = document.getElementById("myCheck_tb_cl5");
        var tb_cl5 = document.getElementById("tb_cl5");
        if (checkBox.checked == true){
            tb_cl5.style.display = "block";
        } else {
            tb_cl5.style.display = "none";
            tb_cl5.value = "tb_cl5";
        }
    }
    
    function mytb_cl6() {
        var checkBox = document.getElementById("myCheck_tb_cl6");
        var tb_cl6 = document.getElementById("tb_cl6");
        if (checkBox.checked == true){
            tb_cl6.style.display = "block";
        } else {
            tb_cl6.style.display = "none";
            tb_cl6.value = "tb_cl6";
        }
    }
    
    function mytb_cl7() {
        var checkBox = document.getElementById("myCheck_tb_cl7");
        var tb_cl7 = document.getElementById("tb_cl7");
        if (checkBox.checked == true){
            tb_cl7.style.display = "block";
        } else {
            tb_cl7.style.display = "none";
            tb_cl7.value = "tb_cl7";
        }
    }
    
    function mystatus() {
        var checkBox = document.getElementById("myCheckStatus");
        var status = document.getElementById("status");
        if (checkBox.checked == true){
            status.style.display = "block";
        } else {
            status.style.display = "none";
            status.value = "Show Content";
        }
    }
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
        var menu = $(this).data('menu');
        var nama = $(this).data('nama');

        $(".modal-body #iddelete").val(iddelete);
        $(".modal-body #menu").val(menu);
        $(".modal-body #nama").val(nama);
        $('#nama').text($('#nama').val());
    });
</script>

<script type="text/javascript">
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

