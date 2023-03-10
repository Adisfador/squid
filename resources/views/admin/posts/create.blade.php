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

                        {{-- <input name="titleUrl" type="text" placeholder="Главный Url"
                            value="{{ $data->titleUrl ?? '' }}" />

                        @error('titleUrl')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror --}}

                        <input name="newsType" type="text" placeholder="Тип Новости"
                            value="{{ $data->newsType ?? ' Политика/Экономика/Спорт/НаукаИтехно/Игры/Мир' }}" />

                        @error('newsType')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <input name="imgCheck" type="text" placeholder="Наличие главной картинки"
                            value="{{ $data->imgCheck ?? '1/0' }}" />

                        @error('imgCheck')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror



                        <input name="time" type="datetime-local"
                            value="{{ isset($data->time) ? date('Y-m-d\TH:i', strtotime($data->time)) : '' }}"
                            placeholder="Время" />

                        @error('time')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <textarea name="miniText" type="text" placeholder="Краткий текст">{{ $data->miniText ?? '' }}</textarea>

                        @error('miniText')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <textarea id="textareas" class="contenteditable" name="mainText" type="text" placeholder="Полный текст"></textarea>

                        <div class="text-decorate">
                            <div class="text-decorate__wrapper">
                                <a id="link" href="#">link</a>
                                <a id="span" href="#">span</a>
                                <a id="p" href="#">p</a>
                                <a id="h4" href="#">h4</a>
                                <a id="blockquote" href="#">blockquote</a>
                                <a id="ul" href="#">ul</a>
                                <a id="img" href="#">img</a>
                                <a id="clear" href="#">clear</a>
                            </div>

                            <div id="texts" contenteditable="true" class="text-decorate__textarea-cont">
                                {!! $data->mainText ??
                                    '
                                    Вас также могут заинтересовать новости:' !!}
                            </div>
                        </div>
                        @error('mainText')
                            <p class="admin__error">{{ $message }}</p>
                        @enderror

                        <label style="display:block;" class="admin-create__input-file">
                            <input type="file" multiple name="Img[]">
                            <span class="admin-create__input-file-btn">Выберите файлы</span>
                            <span class="admin-create__input-file-text">Файлы не выбраны</span>
                        </label>
                        @if (isset($data) && $data->mainImg)
                            <div>
                                <img src="{{ asset('/storage/' . $data->mainImg) }}">
                            </div>
                        @endif



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
