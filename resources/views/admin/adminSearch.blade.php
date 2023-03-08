@section('main')
    <div class="admin-container">
        <?php
        function search_select($q, $text)
        {
            return preg_replace('/((?:^|>)[^<]*)(' . $q . ')/si', '$1<mark>$2</mark>', $text);
        }
        ?>
        <div class="admin-list">
            <a href="{{ route('admin.logout') }}" class="admin-list__link">Выйти</a>
            <main class="main-order">

                <!--! news-column -->
                <section class="news-column">
                    <a href="{{ route('admin.posts.create') }}" class="admin-list__add">Добавить</a>
                    @foreach ($data as $el)
                        @if ($el->imgCheck)
                            <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="news-column__item-img">
                                <img src="{{ asset('/storage/' . $el->mainImg) }}" alt="img" class="news-column__img">
                                <div class="news-column__wrapper">
                                    <div class="news-column__img-title">{!! search_select($filter, $el->title) !!}
                                        <span>{!! $el->miniText !!}</span>
                                    </div>
                                    <div class="news-column__top-date">
                                        <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('admin.posts.edit', $el->id) }}" class="admin-list__red">Редактировать</a>

                            <form action="{{ route('admin.posts.destroy', $el->id) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <button type="submit" class="admin-list__btn">Удалить</button>
                            </form>
                        @else
                            <a href="/news/{!! $el->newsType !!}/{!! $el->titleUrl !!}" class="news-column__item-text">
                                <div class="news-column__text-title">{!! search_select($filter, $el->title) !!}</div>
                                <div class="news-column__top-date">
                                    <span>{!! $el->newsType !!}</span>{!! date('d.m.Y H:i', strtotime($el->time)) !!}
                                </div>

                            </a>
                            <a href="{{ route('admin.posts.edit', $el->id) }}" class="admin-list__red">Редактировать</a>

                            <form action="{{ route('admin.posts.destroy', $el->id) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <button type="submit" class="admin-list__btn">Удалить</button>
                            </form>
                        @endif
                    @endforeach
                    <div class="pag">
                        {{ $data->links() }}
                    </div>

                </section>
                <!--! news-column end -->
            </main>
        </div>
    </div>
@endsection
@extends('admin.adminBody')
