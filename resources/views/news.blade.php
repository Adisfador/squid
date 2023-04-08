@extends('footer')

@section('main')
    <!--! News-text -->
    <section class="News-text">
        <div class="navigate">
            <?php if($title=="Новости"){
                ?>
            <a href="/news/Новости" class="navigate__link"></a>
            <div class="navigate__name">Новости</div>
            <?php
                 } else  {
                ?>
            <a href="/news/Новости" class="navigate__link">Новости</a>
            <span>/</span>
            {{-- <div class="navigate__name">{{ $title }} </div> --}}
            <a href="/news/{{ $title }}" class="navigate__link">{{ $title }}</a>
            <?php
        }
                   ?>

        </div>

        <div id="post-data">
            @if (isset($data2))
                <div class="News-text__item">

                    <h1 class="News-text__title">{!! $data2[$data2->keys()[0]]->title !!} </h1>
                    <div class="News-text__top-date"><span>{!! $data2[$data2->keys()[0]]->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($data2[$data2->keys()[0]]->time)) !!}</div>
                    <p class="News-text__top-text">{!! $data2[$data2->keys()[0]]->miniText !!}
                    </p>
                    <img src="{{ asset('/storage/' . $data2[$data2->keys()[0]]->mainImg) }}" alt="img"
                        class="News-text__img">
                    {!! $data2[$data2->keys()[0]]->mainText !!}
                    {{-- <h4 class="News-text__min-title"> Вас также могут заинтересовать новости:</h4>
                <ul>
                    <li><a href="#" class="News-text__link">Сигналы, которые были в Мюнхене, подтверждают, что
                            Россия проигрывает войну - Зеленский</a></li>
                    <li><a href="#" class="News-text__link">Сигналы, которые были в Мюнхене, подтверждают, что
                            Россия проигрывает войну - Зеленский</a></li>
                    <li><a href="#" class="News-text__link">Сигналы, которые были в Мюнхене, подтверждают, что
                            Россия проигрывает войну - Зеленский</a></li>
                </ul> --}}

                </div>
            @endif
            @include('newsLoad')
        </div>

    </section>
    <!--! News-text  end-->
@endsection

@extends('body')

@extends('header')
