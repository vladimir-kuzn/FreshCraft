@extends('client_layouts._default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Confirm Password') }}</div>

                    <div class="card-body">
                        {{ __('Please confirm your password before continuing.') }}

                        <form method="POST" action="{{ route('password.confirm') }}" id="form_auth">
                            @csrf

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <a class="gui_button" href="{{ route('password.confirm') }}" onclick="event.preventDefault(); document.getElementById('form_auth').submit();">
                                        <div class="horisontal"></div>
                                        <p>{{ __('Confirm Password') }}</p>
                                        <div class="vertical"></div>
                                    </a>
                                    @if (Route::has('password.request'))
                                        <a class="gui_button" href="{{ route('password.request') }}" style="margin-top: 20px;">
                                            <div class="horisontal"></div>
                                            <p>{{ __('Forgot Your Password?') }}</p>
                                            <div class="vertical"></div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
