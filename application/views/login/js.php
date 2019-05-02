<script>
    $(function () {
        $("#xfrm").on('submit', function () {
            var link = 'dataweb/doLogin';
            var sData = $('#xfrm').serialize();
            $.ajax({
                url: link,
                type: "POST",
                data: sData,
                dataType: "html",
                beforeSend: function () {

                },
                success: function (html) {
                    console.log(html)
                    if (html.substring(0, 4) == 'http') {
                        window.location.href = html;
                    } else {
                        $('.alert').html(html);
                        $('.alert').slideDown();
                    }
                    setTimeout(function () {

                    }, 2000);
                },
                error: function () {

                }
            });
            return false;
        });
    });
</script>
