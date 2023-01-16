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
                    <div class="submit">
                        <a href="#" class="big-button">
                            <img src="{{asset('assets/images/socials/discord-svg.svg')}}" alt="DISCORD">
                            Discord
                        </a>
                        <a href="#" class="big-button">
                            <img src="{{asset('assets/images/socials/microsoft-svg.svg')}}" alt="MICROSOFT">
                            Microsoft
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
                                {{ __('Забыл?') }}
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
                    <div class="">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Запомнить') }}
                        </label>
                    </div>
                    <div class="submit">
                        <button type="submit" class="big-button">
                            Войти
                        </button>
                        <a href="{{ route('register') }}" class="big-button">
                            РЕГИСТРАЦИЯ
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
