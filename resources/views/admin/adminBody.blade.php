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


    @if (explode('?', $_SERVER['REQUEST_URI'])[0] != '/admin/login')
        <div class="switcher-module">
            <div class="container">
                <div class="switcher-module__inner">
                    <div class="switcher-module__curs">
                        <a href='/admin/posts'>
                            {{ !isset($filter) ? '' : 'Список постов' }}
                        </a>
                    </div>

                    <form action="{{ asset('/admin/search') }}" class="form" method="get">
                        <input value="{{ $filter ?? '' }}" class="form__text" maxlength="50" minlength="1"
                            autocomplete="off" name="text" type="text" placeholder="поиск...">
                        <input class="form__btn" type="submit" name="enter">
                    </form>


                </div>
            </div>
        </div>
    @endif
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
        //textarea


        if ($("#link").length) {
            $("#link").on("click", function(event) {
                event.preventDefault();
                var linkURL = prompt('Enter a URL:', '');
                var sText = document.getSelection();
                document.execCommand('insertHTML', false, '<a class="News-text__link" href="' + linkURL +
                    '" target="_blank">' + sText + '</a>');
            });

            $("#span").on("click", function(event) {
                event.preventDefault();
                var sText = document.getSelection();
                document.execCommand('insertHTML', false, '<span class="News-text__img-subtitle">' + sText +
                    '</span>');
            });

            $("#p").on("click", function(event) {
                event.preventDefault();
                var sText = document.getSelection();
                document.execCommand('insertHTML', false, '<p class="News-text__text">' + sText + '</p>');
            });

            $("#h4").on("click", function(event) {
                event.preventDefault();
                var sText = document.getSelection();
                document.execCommand('insertHTML', false, ' <h4 class="News-text__min-title">' + sText + '</h4>');
            });

            $("#blockquote").on("click", function(event) {
                event.preventDefault();
                var sText = document.getSelection();
                document.execCommand('insertHTML', false, '<blockquote><p class="News-text__text">' + sText +
                    ' </p> </blockquote>');
            });

            $("#ul").on("click", function(event) {
                event.preventDefault();
                document.execCommand("insertUnorderedList");
            });

            $("#clear").on("click", function(event) {
                event.preventDefault();
                document.querySelector("#texts").innerText = ""
            });

            $("#img").on("click", function(event) {
                event.preventDefault();
                var sText = document.getSelection();
                document.execCommand('insertHTML', false, '<img src="/storage/img/innerImg/' + sText +' " alt="img" class="News-text__img">');

            });


            document.querySelector("#textareas").innerText = document.querySelector("#texts").innerHTML

            $("#texts").on("keyup", function(event) {
                event.preventDefault();


                document.querySelector("#textareas").innerText = document.querySelector("#texts").innerHTML

            });
            document.querySelector('div[contenteditable="true"]').addEventListener("paste", function(e) {
                e.preventDefault();
                var text = e.clipboardData.getData("text/plain");
                document.execCommand("insertHTML", false, text);
            });
        }
    </script>
</body>

</html>
