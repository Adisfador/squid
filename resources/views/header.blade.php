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
    <!--! switcher-module -->
    <div class="switcher-module">
        <div class="container">
            <div class="switcher-module__inner">
                <div class="switcher-module__curs">
                    <span class="icon-dollar dollar"></span>
                    <span class="icon-eur  eur"></span>
                </div>

                <form action="{{asset("/search")}}" class="form" method="get">
                    <input class="form__text" maxlength="50" minlength="1" autocomplete="off" name="text"
                        type="text" placeholder="поиск...">
                    <input class="form__btn" type="submit" name="enter">
                </form>
                <?php
                if(!isset($title) ){
                    ?>
                <div class="switcher-module__box">
                    <span>Показывать по порядку</span>
                    <span class="switcher-module__check-box "></span>
                </div>
                <?php
                }
                 ?>

            </div>
        </div>
    </div>
    <!--! switcher-module end -->
    <!--! popup -->
    <div id="popup" class="popup">
        <div class="popup__wrapper"></div>
        <div class="popup__body">
            <div class="popup__content">
                <a href="#" class="popup__close"><span></span></a>
                <h4 class="popup__title">Обратная связь</h4>
                <p class="popup__text">Форма связи для получения информации о найденных ошибках и недочетах в работе
                    сайта. Все предложения будут рассмотрены. <span>(При успешной отправке будет произведен редирект на
                        главную страницу)</span> </p>
                <div class="popup__form ">


                    @if ($errors->any())
                    <div class="errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>
                    </div>
                    @endif




                    <form action="/send-mail" method="post">
                        @csrf
                        <label for="e-mail" class="popup__item-wrapper">
                            <input autocomplete="off" maxlength="140" id="e-mail" name="e-mail" class="popup__item"
                                type="text">
                            <div class="popup__placeholder">Email , telegram или любой другой способ связи</div>
                        </label>

                        <label for="What" class="popup__textarea-wrapper">
                            <textarea maxlength="2500" id="What" name="What" class="popup__textarea"></textarea>
                            <div class="popup__placeholder">Текст сообщения</div>
                        </label>
                        <button type="submit" class="popup__btn">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--! popup end -->



    <!--! burger-menu -->
    <button id="burger-menu" class="burger-menu "><span></span></button>
    <!--! burger-menu end -->
