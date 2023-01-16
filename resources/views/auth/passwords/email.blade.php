@extends('layouts.auth.passwords.email')

@section('content-main')
<div class="main" style="margin-top: 83px;">
    <img src="{{asset('assets/images/posters/poster (20).webp')}}" alt="background">
    <div class="wrapper">
        <div class="main_box">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <span class="">
                    Восстановление пароля
                </span>

                @if (session('status'))
                    <span class="">
                        {{ session('status') }}
                    </span>
                @endif
                <div class="label_input">
                    <span class="">
                        Почта
                    </span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="submit">
                    <button type="submit" class="big-button">
                        Восстановить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
