<!--? content -->
<div class="news-column__box">




    @foreach ($data as $el)
        <?php
        $c = 0;
        ?>
        @foreach ($x as $els)
            @if ($els->titleUrl == $el->titleUrl)
                <?php
                $c = 1;
                ?>
            @endif
        @endforeach
        @if ($c==0)
            @if ($el->imgCheck)
                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="news-column__item-img">
                    <img src="{{ asset("/storage/" .$el->mainImg) }}" alt="img" class="news-column__img">
                    <div class="news-column__wrapper">
                        <div class="news-column__img-title">{!! $el->title !!}
                            <span>{!! $el->miniText !!}</span>
                        </div>
                        <div class="news-column__top-date">
                            <span>{!! $el->newsType !!}</span>{!! $el->time !!}
                        </div>
                    </div>
                </a>
            @else
                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="news-column__item-text">
                    <div class="news-column__text-title">{!! $el->title !!}</div>
                    <div class="news-column__top-date"><span>{!! $el->newsType !!}</span>{!! $el->time !!}
                    </div>

                </a>
            @endif
        @endif
    @endforeach
</div>


<!--? content end -->
