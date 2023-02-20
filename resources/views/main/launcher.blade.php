@extends('layouts.launcher')

@section('content-main')
<section class="sect__welcome">
    <img class="bg_image" src="{{ asset('assets/images/service_obl/bg_launcher_page.webp') }}" alt="background">
    <div class="filter_on_poster"></div>
    <img class="cover" src="{{ asset('assets/images/covers/LauncherPoster.webp') }}" alt="launcher cover">
    <div class="welcome_container">
        <div class="weclome_wrapper">
            <h1>
                FRESHCRAFT LAUNCHER
            </h1>
            <p>
                Скачайте наш лаунчер для игры на сборке и сервере - удобной загрузки обновлений и выбора версий!
            </p>
        </div>
        <a class="gui_button" href="#">
            <div class="horisontal"></div>
            <p style="font-size: 24px">СКАЧАТЬ</p>
            <div class="vertical"></div>
        </a>
    </div>
</section>

<section class="sect__more">
    <div class="news_container">
        <h1>СКРИНШОТЫ</h1>
        <div class="container_wrapper">
            <a class="gui_button" href="#">
                <div class="horisontal"></div>
                <p><-</p>
                <div class="vertical"></div>
            </a>

            <div class="more_containers">
                <div class="content_container">
                    <img src="https://freshcraft.pheo-design.ru/img/cover_news.jpg">
                </div>
                <div class="content_container">
                    <img src="https://freshcraft.pheo-design.ru/img/cover_news.jpg">
                </div>
                <div class="content_container">
                    <img src="https://freshcraft.pheo-design.ru/img/cover_news.jpg">
                </div>
            </div>

            <a class="gui_button" href="#">
                <div class="horisontal"></div>
                <p>-></p>
                <div class="vertical"></div>
            </a>
        </div>
    </div>
</section>

<section class="sect__more">
    <div class="opportunities_container">
        <h1>ВОЗМОЖНОСТИ</h1>
        <div class="opportunities_container_enumeration">
            <span>Высококачественный прототип будущего проекта продолжает удивлять</span>
            <span>Светлый лик правового взаимодействия попахивает безумием</span>
            <span>На двадцатом съезде партии прозвучало поразительное заявление: близость к государственным границам расставила все точки над i</span>
            <span>Господа, чистый разум не скован границами</span>
            <span>Допустим, зима близко, и что с того? Холода не такие уж и страшные...</span>
            <span>Современные технологии достигли такого уровня, что выбранный нами инновационный путь требует от нас анализа вывода текущих активов.</span>
        </div>
    </div>
    <br>
    <h1>ВИДЕО-ТУТОРИАЛ</h1>
    <iframe width="560" height="315"
    src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ"
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
    style="margin-bottom:50px;"></iframe>
</section>
@endsection
