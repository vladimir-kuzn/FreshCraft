@extends('layouts.auth.verify')

@section('content-main')
    {{--
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}

    <div class="main" style="margin-top: 83px;">
        <img src="{{asset('assets/images/posters/poster (20).webp')}}" alt="background">
        <div class="wrapper">
            <div class="main_box">
                <form method="POST" action="{{ route('verification.resend') }}">
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
                        <button type="submit" class="big-button">
                            Повтор
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
