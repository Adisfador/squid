    <!--! page-content -->
    <div class="page-content">
        <div class="container">
            <div class="page-content__inner">
                <!--! nav -->
                <nav class="nav">
                    <div class="nav__wrapper ">
                        <div class="nav__bg"></div>
                        <a href="/" class="logo">
                            <img src="{{ asset('/img/squid.svg') }}" alt="Logo" class="logo__img">
                            <span class="logo__title">squid</span>
                        </a>

                        <div class="nav__box">
                            <a href="/news/Новости" class="nav__item">Главная</a>
                            <a href="/news/Политика" class="nav__item">Политика</a>
                            <a href="/news/Экономика" class="nav__item">Экономика</a>
                            <a href="/news/Спорт" class="nav__item">Спорт</a>
                            <a href="/news/НаукаИтехно" class="nav__item">Наука и техно</a>
                            <a href="/news/Игры" class="nav__item">Игры</a>
                            <a href="/news/Мир" class="nav__item">Мир</a>
                            <a href="#" id="call_back" class="nav__item">Обратная связь</a>
                        </div>
                    </div>

                </nav>
                <!--! nav end -->

                @yield("main")





            </div>
        </div>
    </div>
    <!--! page-content -->
