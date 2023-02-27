@extends('auth_layouts.verify')

@section('content-main')
    <div class="main" style="margin-top: 83px;">
        <img src="{{asset('assets/images/posters/poster (20).webp')}}" alt="background">
        <div class="wrapper">
            <div class="main_box">
                <form method="POST" action="{{ route('verification.resend') }}" id="form_auth">
                    @csrf
                    <span class="">
                        Подтвердите свой адрес электронной почты
                    </span>

                    @if (session('resent'))
                        <span class="">
                            На ваш адрес электронной почты была отправлена новая ссылка для подтверждения.
                        </span>
                    @endif
                    <span class="">
                        {{ __('Прежде чем продолжить, пожалуйста, проверьте свою электронную почту на наличие ссылки для подтверждения.') }}
                    </span>
                    <span class="">
                        {{ __('Если вы не получили электронное письмо - нажмите ниже') }},
                    </span>
                    <div class="submit">
                        <a class="gui_button" href="{{ route('verification.resend') }}"
                           onclick="event.preventDefault(); document.getElementById('form_auth').submit();">
                            <div class="horisontal"></div>
                            <p>Повтор</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
