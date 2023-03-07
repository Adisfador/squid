<main class="main-order">
    <h1 class="title"><a href="/news/Новости">НОВОСТИ ДНЯ</a> </h1>
    <div class="main-order__top-box">
        <?php
        $count = 0;
        ?>
        @foreach ($dataPolitic as $el)
            @if ($count == 4)
                <?php

                break; ?>
            @endif
            <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="main-order__item">
                <div class="main-order__top-title">{!! $el->title !!}</div>
                <div class="main-order__top-date"><span>{!! $el->newsType !!}</span>{!! $el->time !!}</div>
                <img src="{{ asset("/storage/" . $el->mainImg) }}" alt="img" class="main-order__img">
            </a>
            <?php
            $dataPolitic->pull($dataPolitic->keys()[0]);
            $count++;
            ?>
        @endforeach

    </div>
    <!--! news-column -->
    <section class="news-column">

        <div class="news-column__check-box">
            <div class="news-column__btn Ns--active" id="Ns">Новости</div>
            <div class="news-column__btn" id="Mn">Главное</div>
        </div>
        <div class="news-column__content">

        </div>


    </section>
    <!--! news-column end -->
</main>
