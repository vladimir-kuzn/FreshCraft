@extends('auth_layouts.register')

@section('content-main')
    <div class="main" style="margin-top: 83px;">
        <img src="{{asset('assets/images/posters/poster (20).webp')}}" alt="background">
        <div class="wrapper">
            <div class="main_box">
                <form method="POST" action="{{ route('register') }}" id="form_auth" class="">
                    @csrf

                    <span class="">
                    Регистрация
                </span>
                    <div class="label_input">
                    <span class="">
                        Никнейм
                    </span>
                        <input id="nickname" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="nickname" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('nickname')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="label_input">
                    <span class="">
                        Почта
                    </span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="label_input">
                    <span class="">
                        Пароль
                    </span>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="label_input">
                    <span class="">
                        Повторите пароль
                    </span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required autocomplete="new-password">
                    </div>
                    <div class="submit">
                        <a class="gui_button" href="{{ route('register') }}"
                           onclick="event.preventDefault(); document.getElementById('form_auth').submit();">
                            <div class="horisontal"></div>
                            <p>Создать!</p>
                            <div class="vertical"></div>
                        </a>
                        <a class="gui_button" href="{{ route('login') }}" style="margin-top: 20px;">
                            <div class="horisontal"></div>
                            <p>Уже есть аккаунт</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
