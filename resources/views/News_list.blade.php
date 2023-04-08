@extends('footer')

@section('main')
    <!--?   includedContent -->
    <main class="main-order">
        @if ($title == 'НаукаИтехно')
            <?php $title = 'Наука И техно'; ?>
        @endif
        <h1 class="title">{{ $title }} </h1>
        <div class="main-order__top-box">
            <?php
            $count = 0;
            ?>
            @foreach ($data as $el)
                @if ($count == 3)
                    <?php

                    break;
                    ?>
                @endif
                <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="main-order__item">

                    <div class="main-order__top-title">{!! $el->title !!}</div>
                    <div class="main-order__top-date"><span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!} </div>
                    <img src="{{ asset('/storage/' . $el->mainImg) }}" alt="img" class="main-order__img">
                </a>
                <?php
                $data->pull($data->keys()[0]);
                $count++;
                ?>
            @endforeach

        </div>

        <!--! news-column -->
        <section class="news-column">

            <div id="post-data">
                @include('dataLoad')
            </div>

        </section>
        <!--! news-column end -->
    </main>

    <!--?   includedContent -->
@endsection
@extends('body')
@extends('header')
