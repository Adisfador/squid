@if (isset($data))

    @foreach ($data as $el)
        <div class="News-text__item">
            {{-- {{$name}} --}}
            <h1 class="News-text__title">{!! $el->title !!} </h1>
            <div class="News-text__top-date"><span>{!! $el->newsType !!}</span>{!! $el->time !!}</div>
            <p class="News-text__top-text">{!! $el->miniText !!}
            </p>
            <img src="{{ asset("/storage/" .$el->mainImg) }}" alt="img" class="News-text__img">
            {!! $el->mainText !!}
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
    @endforeach
@endif




