<!--! main -->
<main class="main">
    <!--! daily-news -->
    <section class="daily-news">
        <h1 class="title">

            <a href="/news">НОВОСТИ ДНЯ </a>
        </h1>
        <div class="daily-news__top-box">
            <?php
            $count = 0;
            ?>
            @foreach ($dataPolitic as $el)
                @if ($count == 2)
                    <?php

                    break; ?>
                @endif
                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="daily-news__item">
                    <div class="daily-news__top-title">{!! $el->title !!}</div>
                    <div class="daily-news__top-date"><span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}</div>
                    <img src="{{ asset("/storage/" . $el->mainImg) }}" alt="img" class="daily-news__img">
                </a>
                <?php
                $dataPolitic->pull($dataPolitic->keys()[0]);
                $count++;
                ?>
            @endforeach
        </div>
        <div class="daily-news__sub-box">
            <?php
            $count = 0;
            ?>
            @foreach ($dataPolitic as $el)
                @if ($count == 3)
                    <?php

                    break; ?>
                @endif

                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="daily-news__item">
                    <div class="daily-news__top-title">{!! $el->title !!}</div>
                    <div class="daily-news__top-date">
                        <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                    </div>
                    <img src="{{ asset("/storage/" .$el->mainImg) }}" alt="img" class="daily-news__img">
                </a>
                <?php
                $dataPolitic->pull($dataPolitic->keys()[0]);
                $count++;
                ?>
            @endforeach


        </div>
        <div class="daily-news__sub-box">
            <?php
            $count = 0;
            ?>
            @foreach ($dataPolitic as $el)
                @if ($count == 3)
                    <?php

                    break; ?>
                @endif

                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="daily-news__item">
                    <div class="daily-news__top-title">{!! $el->title !!}</div>
                    <div class="daily-news__top-date">
                        <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                    </div>
                    <img src="{{ asset("/storage/" .$el->mainImg) }}" alt="img" class="daily-news__img">
                </a>
                <?php
                $dataPolitic->pull($dataPolitic->keys()[0]);
                $count++;
                ?>
            @endforeach
        </div>
    </section>
    <!--! daily-news end-->

    <!--! economy -->
    <section class="economy">
        <h2 class="title"><a href="#">Экономика</a> </h2>
        <div class="economy__box">
            <div class="economy__item">
                <a href="/news/{!! $dataEconomy[$dataEconomy->keys()[0]]->newsType !!}/{!! $dataEconomy[$dataEconomy->keys()[0]]->titleUrl !!}" class="economy__main-news">
                    <h3 class="economy__title">{!! $dataEconomy[$dataEconomy->keys()[0]]->title !!}</h3>
                    <div class="economy__date">
                        <span>{!! $dataEconomy[$dataEconomy->keys()[0]]->newsType !!}</span> {!! date('d.m.Y H:i', strtotime($dataEconomy[$dataEconomy->keys()[0]]->time)) !!}
                    </div>
                </a>
                <?php
                $dataEconomy->pull($dataEconomy->keys()[0]);
                ?>
            </div>
            <div class="economy__item">
                <div class="economy__block">
                    <?php
                    $count = 0;
                    ?>
                    @foreach ($dataEconomy as $el)
                        @if ($count == 2)
                            <?php

                            break; ?>
                        @endif

                        <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="economy__news">
                            <h3 class="economy__title">{!! $el->title !!}</h3>
                            <div class="economy__date">
                                <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                            </div>
                        </a>
                        <?php
                        $dataEconomy->pull($dataEconomy->keys()[0]);
                        $count++;
                        ?>
                    @endforeach

                </div>
                <div class="economy__block">
                    <?php
                    $count = 0;
                    ?>
                    @foreach ($dataEconomy as $el)
                        @if ($count == 2)
                            <?php

                            break; ?>
                        @endif

                        <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="economy__news">
                            <h3 class="economy__title">{!! $el->title !!}</h3>
                            <div class="economy__date">
                                <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                            </div>
                        </a>
                        <?php
                        $dataEconomy->pull($dataEconomy->keys()[0]);
                        $count++;
                        ?>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--! economy end -->

    <!--! sport -->
    <section class="sport">
        <h2 class="title"><a href="#">Спорт</a> </h2>
        <div class="sport__box">
            <?php
            $count = 0;
            ?>
            @foreach ($dataSport as $el)
                @if ($count == 2)
                    <?php

                    break; ?>
                @endif

                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="sport__item">
                    <img src="{{ asset("/storage/" .$el->mainImg) }}" alt="img" class="sport__img">
                    <div class="sport__date">
                        <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                    </div>
                    <h3 class="sport__title">{!! $el->title !!}</h3>
                    <p class="sport__text">
                        {!! $el->miniText !!}
                    </p>
                </a>
                <?php
                $count++;
                ?>
            @endforeach


        </div>
    </section>
    <!--! sport end-->

    <!--!   science -->
    <section class="science">
        <h2 class="title"><a href="#">Наука и техно</a> </h2>
        <div class="science__box">
            <?php
            $count = 0;
            ?>
            @foreach ($dataScience as $el)
                @if ($count == 3)
                    <?php

                    break; ?>
                @endif

                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="science__item">
                    <img src="{{ asset("/storage/" .$el->mainImg) }}" alt="img" class="science__img">
                    <div class="science__date">
                        <span>Наука и техно</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                    </div>
                    <h3 class="science__title">{!! $el->title !!}</h3>
                </a>
                <?php
                $count++;
                ?>
            @endforeach


        </div>
    </section>
    <!--!   science -->

    <!--!  games -->
    <section class="games">
        <h2 class="title"><a href="#">Игры</a> </h2>
        <div class="games__box">
            <?php
            $count = 0;
            ?>
            @foreach ($dataGames as $el)
                @if ($count == 3)
                    <?php

                    break; ?>
                @endif

                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="games__item">
                    <img src="{{ asset("/storage/" .$el->mainImg) }}" alt="img" class="games__img">
                    <div class="games__date">
                        <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                    </div>
                    <h3 class="games__title">
                        {!! $el->title !!}</h3>
                </a>
                <?php
                $count++;
                ?>
            @endforeach

        </div>
    </section>
    <!--!   games end -->


    <!--!  world -->
    <section class="world">
        <h2 class="title"><a href="#">Мир</a> </h2>
        <div class="world__box">
            <div class="economy__item">
                <a href="/news/{!! $dataWorld[$dataWorld->keys()[0]]->newsType !!}/{!! $dataWorld[$dataWorld->keys()[0]]->titleUrl !!}" class="economy__main-news">
                    <h3 class="economy__title">{!! $dataWorld[$dataWorld->keys()[0]]->title !!}</h3>
                    <div class="economy__date">
                        <span>{!! $dataWorld[$dataWorld->keys()[0]]->newsType !!}</span> {!! date('d.m.Y H:i', strtotime($dataWorld[$dataWorld->keys()[0]]->time)) !!}
                    </div>
                </a>
                <?php
                $dataWorld->pull($dataWorld->keys()[0]);
                ?>
            </div>
            <div class="economy__item">
                <div class="economy__block">
                    <?php
                    $count = 0;
                    ?>
                    @foreach ($dataWorld as $el)
                        @if ($count == 2)
                            <?php

                            break; ?>
                        @endif

                        <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="economy__news">
                            <h3 class="economy__title">{!! $el->title !!}</h3>
                            <div class="economy__date">
                                <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                            </div>
                        </a>
                        <?php
                        $dataWorld->pull($dataWorld->keys()[0]);
                        $count++;
                        ?>
                    @endforeach

                </div>
                <div class="economy__block">
                    <?php
                    $count = 0;
                    ?>
                    @foreach ($dataWorld as $el)
                        @if ($count == 2)
                            <?php

                            break; ?>
                        @endif

                        <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="economy__news">
                            <h3 class="economy__title">{!! $el->title !!}</h3>
                            <div class="economy__date">
                                <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                            </div>
                        </a>
                        <?php
                        $dataWorld->pull($dataWorld->keys()[0]);
                        $count++;
                        ?>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--!  world end -->
</main>
<!--! main end-->
