@extends('client_layouts.InDevelopment')

@section('content-main')
    <section class="sect__welcome">
        <div class="image">
            <img src="{{asset('assets/images/posters/poster (21).webp')}}" alt="background">
        </div>
        <div class="filter_on_poster"></div>
        <div class="welcome_container">
            <div class="weclome_wrapper">
                <h1>
                    В разработке...
                </h1>
            </div>
        </div>
    </section>
@endsection
