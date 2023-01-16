@extends('layouts.launcher')

@section('content-main')
<section class="sect__welcome">
    <img class="bg_image" src="../img/posters/poster (5).webp" alt="background">
    <div class="filter_on_poster"></div>
    <img class="cover" src="https://freshcraft.pheo-design.ru/img/launcher_cover.jpeg" alt="launcher cover">
    <div class="welcome_container">
        <div class="weclome_wrapper">
            <h1>
                FRESHCRAFT LAUNCHER
            </h1>
            <p>
                Кстати, акционеры крупнейших компаний 
                формируют глобальную экономическую сеть и при 
                этом — функционально разнесены на независимые элементы!
            </p>
        </div>
        <a href="#" class="big-button">ЗАГРУЗИТЬ</a>
    </div>
</section>

<section class="sect__more">
    <div class="news_container">
        <h1>СКРИНШОТЫ</h1>
        <div class="container_wrapper">
            <a href="#" class="btn_ news_btn big-button">
                <svg viewBox="0 0 512 512">
                    <path d="M96 288v64h64v64h64v64h64V288h192v-64H288V32h-64v64h-64v64H96v64H32v64h64z"></path>
                </svg>
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

            <a href="#" class="btn_ news_btn big-button">
                <svg viewBox="0 0 512 512">
                    <path d="M416 224v-64h-64V96h-64V32h-64v192H32v64h192v192h64v-64h64v-64h64v-64h64v-64h-64z"></path>
                </svg>
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
