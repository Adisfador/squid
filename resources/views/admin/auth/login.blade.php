

@section('main')
    <div class="admin-container">
        <div class="admin">
            <h1 class="admin__title">Вход</h1>

            <form method="POST" action="{{ route('admin.login_process') }}" class="space-y-5 mt-5">
                @csrf

                <input name="email" type="text"

                    placeholder="Email" />

                @error('email')
                    <p class="admin__error">{{ $message }}</p>
                @enderror

                <input name="password" type="password"

                    placeholder="Пароль" />

                @error('password')
                    <p class="admin__error">{{ $message }}</p>
                @enderror

                <button type="submit"
                    class="admin__btn">Войти</button>
            </form>
        </div>
    </div>
@endsection
@extends('admin.adminBody')

