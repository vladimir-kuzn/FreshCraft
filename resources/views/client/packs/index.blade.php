@extends('client_layouts.packs.index')

@section('content-main')
    <section class="banner" style="margin-top: 83px">
        <img src="{{ asset('assets/images/1_tmp/banner_freshcraft_static.jpg') }}" alt="banner_freshcraft_static">
    </section>

    <section class="static_screenshots">
        <h1>Посмотреть Freshcraft в действии</h1>
        <div>
            <a class="gui_button" href="#button">
                <div class="horisontal"></div>
                <p style="font-size: 24px"><</p>
                <div class="vertical"></div>
            </a>

            <a href="#screenshot"><img src="{{ asset('assets/images/1_tmp/screenshot1.webp') }}" alt="screenshot"></a>
            <a href="#screenshot"><img src="{{ asset('assets/images/1_tmp/screenshot1.webp') }}" alt="screenshot"></a>
            <a href="#screenshot"><img src="{{ asset('assets/images/1_tmp/screenshot1.webp') }}" alt="screenshot"></a>
            <a href="#screenshot"><img src="{{ asset('assets/images/1_tmp/screenshot1.webp') }}" alt="screenshot"></a>
            <a href="#screenshot"><img src="{{ asset('assets/images/1_tmp/screenshot1.webp') }}" alt="screenshot"></a>

            <a class="gui_button" href="#button">
                <div class="horisontal"></div>
                <p style="font-size: 24px">></p>
                <div class="vertical"></div>
            </a>
        </div>
    </section>

    <section class="news" style="background-image: url({{ asset('assets/images/1_tmp/bg-lightwool.webp') }})">
        <h1>Всегда что-то новое</h1>
        <h3>
            Благодаря регулярным обновлениям ты можешь исследовать новые инструменты, места и пространства. <br>
            Посмотри, что нового на этот раз.
        </h3>
        <div>
            <a class="gui_button" href="#button">
                <div class="horisontal"></div>
                <p style="font-size: 24px"><</p>
                <div class="vertical"></div>
            </a>

            <div>
                <img src="{{ asset('assets/images/1_tmp/pack_fc_news_static.jpg') }}" alt="pack_fc_news_static">
                <div>
                    <h1>Трассировка лучей</h1>
                    <p>
                        Трассировка лучей для Windows изменит то, как ты видишь Minecraft.
                        Посети искусно созданные миры с реалистичным освещением, яркими цветами,
                        естественными отражениями в воде и излучающими свет текстурами.
                    </p>
                    <a class="gui_button" href="#button">
                        <div class="horisontal"></div>
                        <p style="font-size: 24px">Подробнее...</p>
                        <div class="vertical"></div>
                    </a>
                </div>
            </div>


            <a class="gui_button" href="#button">
                <div class="horisontal"></div>
                <p style="font-size: 24px">></p>
                <div class="vertical"></div>
            </a>
        </div>
    </section>
@endsection
