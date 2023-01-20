@extends('layouts.auth.passwords.reset')

@section('content-main')
    <div class="main" style="margin-top: 83px;">
        <img src="{{asset('assets/images/posters/poster (20).webp')}}" alt="background">
        <div class="wrapper">
            <div class="main_box">
                <form method="POST" action="{{ route('password.update') }}" id="form_auth">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <span class="">
                        Изменение пароля
                    </span>
                    <div class="label_input">
                        <span class="">
                            Почта
                        </span>
                        <input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="submit">
                        <a class="gui_button" href="{{ route('password.update') }}" onclick="event.preventDefault(); document.getElementById('form_auth').submit();">
                            <div class="horisontal"></div>
                            <p>Изменить</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
