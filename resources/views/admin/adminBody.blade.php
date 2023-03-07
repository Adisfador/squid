<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>squid</title>
    <link rel="icon" href="{{ asset('/img/squid.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/staff/normalize.css?ver=1') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/staff/ico_style.css?ver=1') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/stul.css?ver=1') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/style.min.css?ver=1') }}" type="text/css">



</head>

<body>

    @yield('main')

    <!--! footer -->
    <footer id="footer" class="footer">
        <div style="padding:30px;" class="footer__container">
            <a href="https://zvladislav.ffox.site/" target="_blank" class="footer__link">
                <img src="{{ asset('/img/cog.svg') }}" alt="img" class="footer__img">
                <div class="footer__text"> Разработка сайта <span>
                        < Vfolio />
                    </span></div>
            </a>
            <div class="footer__name">squid | <span></span></div>
        </div>
    </footer>
    <!--! footer end -->


    <script src="{{ asset('/staff/jquery-3.5.1.min.js?ver=1') }}"></script>
    <script>
        var contactsH = $("#footer").offset().top,
            scrollOffset = $(window).height(),
            footerheight = $("#footer").height();

        if (scrollOffset > contactsH + footerheight) {
            $("#footer").toggleClass("footer-down");
        }

        $('.admin-create__input-file input[type=file]').on('change', function() {
            let file = this.files[0];
            $(this).closest('.admin-create__input-file').find('.admin-create__input-file-text').html(file.name);
            console.log("refae")
        });
    </script>
</body>

</html>
