@extends('layouts.auth.login')

@section('content-main')
    <div class="main" style="margin-top: 83px;">
        <img src="{{asset('assets/images/posters/poster (20).webp')}}" alt="background">
        <div class="wrapper">
            <div class="main_box">
                <form method="POST" action="{{ route('login') }}" id="form_auth" class="">
                    @csrf

                    <span class="">
                        Вход
                    </span>
                    <div class="submit_row">
                        <a class="gui_button" href="#" style="margin-right: 20px;">
                            <div class="horisontal"></div>
                            <p> <img src="{{asset('assets/images/socials/discord-svg.svg')}}" alt="DISCORD">Discord</p>
                            <div class="vertical"></div>
                        </a>
                        <a class="gui_button" href="#">
                            <div class="horisontal"></div>
                            <p> <img src="{{asset('assets/images/socials/microsoft-svg.svg')}}" alt="DISCORD">Microsoft</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                    <div class="label_input">
                    <span class="">
                        Почта
                    </span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Забыли?') }}
                            </a>
                        @endif
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div style="margin-bottom: 30px">
                        <label class="custom-checkbox" for="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span>Запомнить</span>
                        </label>
                    </div>
                    <div class="submit">
                        <a class="gui_button" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('form_auth').submit();">
                            <div class="horisontal"></div>
                            <p>Войти</p>
                            <div class="vertical"></div>
                        </a>
                        <a class="gui_button" href="{{ route('register') }}" style="margin-top: 20px;">
                            <div class="horisontal"></div>
                            <p>Регистрация</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
