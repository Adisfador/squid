@section('main')
    <div class="admin-create">
        <div class="admin-create-container">
            <div class="admin-create__inner">
                <h3 class="admin-create__title">
                    {{ isset($data) ? "Редактировать статью ID {$data->id}" : 'Добавить статью' }}</h3>

                <div class="mt-8">

                </div>

                <div class="mt-8">
                    <form enctype="multipart/form-data" method="POST"
                        action="{{ isset($data) ? route('admin.posts.update', $data->id) : route('admin.posts.store') }}">
                        @csrf

                        @if (isset($data))
                            @method('PUT')
                        @endif

                        <input name="title" type="text" placeholder="Название" value="{{ $data->title ?? '' }}" />

                        @error('title')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <input name="titleUrl" type="text" placeholder="Главный Url"
                            value="{{ $data->titleUrl ?? '' }}" />

                        @error('titleUrl')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <input name="newsType" type="text" placeholder="Тип Новости"
                            value="{{ $data->newsType ?? ' Новости/Политика/Экономика/Спорт/НаукаИтехно/Игры/Мир' }}" />

                        @error('newsType')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <input name="imgCheck" type="text" placeholder="Наличие главной картинки"
                            value="{{ $data->imgCheck ?? '1/0' }}" />

                        @error('imgCheck')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <input name="time" type="text" placeholder="Время" value="{{ $data->time ?? '10:08, 17.02.2023' }}" />

                        @error('time')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <textarea name="miniText" type="text" placeholder="Краткий текст"
                             >{{ $data->miniText ?? '' }}</textarea>

                        @error('miniText')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <textarea name="mainText" type="text" placeholder="Полный текст"
                            >{{ $data->mainText ?? '<span class="News-text__img-subtitle">15 февраля в иеве будет небольшая облачность</span> <p class="News-text__text">Министр иностранных дел Украины Дмитрий Кулеба отменил поездку в
                                Брюссель, где должна была <a href="/news/{newsType}/{newsUrl}" class="News-text__link">состояться встреча с
                                европейскими министрами</a> иностранных дел перед
                                заседанием Совета ЕС.


                                <h4 class="News-text__min-title"> Боеприпасы для Украины</h4>

                                <blockquote>
                                <p class="News-text__text"> По мнению европейских чиновников и дипломатов, совместные действия Евросоюза
                                будут более</p>

                                </blockquote>
                               <h4 class="News-text__min-title"> Вас также могут заинтересовать новости:</h4>
                <ul>
                    <li><a href="/news/{newsType}/{newsUrl}" class="News-text__link">Сигналы, которые были в Мюнхене, подтверждают, что
                            Россия проигрывает войну - Зеленский</a></li>
                    <li><a href="/news/{newsType}/{newsUrl}" class="News-text__link">Сигналы, которые были в Мюнхене, подтверждают, что
                            Россия проигрывает войну - Зеленский</a></li>
                    <li><a href="/news/{newsType}/{newsUrl}" class="News-text__link">Сигналы, которые были в Мюнхене, подтверждают, что
                            Россия проигрывает войну - Зеленский</a></li>
                </ul>' }}</textarea>

                        @error('mainText')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        @if (isset($data) && $data->mainImg)
                            <div>
                                <img  src="{{ asset('/storage/' . $data->mainImg) }}">
                            </div>
                        @endif

                        {{-- <input name="mainImg" type="file" class="w-full h-12" placeholder="Обложка" /> --}}

                        <label class="admin-create__input-file">
                            <input type="file" name="mainImg">
                            <span class="admin-create__input-file-btn">Выберите файл</span>
                            <span class="admin-create__input-file-text">Файл не выбран</span>
                        </label>

                        @error('mainImg')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="admin-create__btn">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('admin.adminBody')
