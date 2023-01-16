@extends('layouts.main')

@section('content-main')
<section class="sect__welcome">
    <img src="{{asset('assets/images/posters/poster (5).webp')}}" alt="background">
    <div class="filter_on_poster"></div>
    <div class="welcome_container">
        <div class="weclome_wrapper">
            <h1>
                ДОБРО ПОЖАЛОВАТЬ НА ОФИЦИАЛЬНЫЙ САЙТ FRESHCRAFT
            </h1>
            <p>
            Уникальный проект, новое слово в тематике модпаков майнкрафт — 
            раскрой потенциал великой игры
            <br> с проектом FreshCraft.<br>
            Освежи впечатление от выживания и получи незабываемые ощущения от игрового процесса!
        </div>
        <a href="/launcher" class="big-button">ПОЛУЧИТЬ ЛАУНЧЕР</a>
    </div>
</section>

<section class="sect__more box-shadow_111111">
    <div class="more-games_container">
        <div class="corner corn-top">
            <img src="{{asset('assets/images/ui-icons/corner.png')}}">
            <img src="{{asset('assets/images/ui-icons/corner.png')}}">
        </div>
        <div class="more-games_wrapper">
            <h1>ВСЕ ПРОЕКТЫ FRESHCRAFT</h1>
            <div class="container_wrapper">
                <a href="#" class="btn_ news_btn big-button">
                    <svg viewBox="0 0 512 512">
                        <path d="M96 288v64h64v64h64v64h64V288h192v-64H288V32h-64v64h-64v64H96v64H32v64h64z"></path>
                    </svg>
                </a>

                <div class="more_containers">
                    <div class="content_container">
                        <img src="{{asset('assets/images/covers/Fantasy-GrayScale.webp')}}">
                        <h2>FreshCraft Fantasy</h2>
                        <p>
                            Классический FreshCraft в жанре Фэнтези. 
                            Побеждайте мифологических и сказочных существ, могущественных боссов!
                            Изучайте магию и покоряйте новые таинственные измерения!
                        </p>
                    </div>
                    <div class="content_container">
                        <img src="{{asset('assets/images/covers/Classic.webp')}}">
                        <h2>FreshCraft Classic</h2>
                        <p>
                            FreshCraft Classic - Это сборка модов майнкрафт, 
                            целью которой является освежить и улучшить 
                            впечатления от ванильного выживания. 
                            Основной упор сделан на приключения
                        </p>
                    </div>
                    <div class="content_container">
                        <img src="{{asset('assets/images/covers/Industrial-GrayScale.webp')}}">
                        <h2>FreshCraft Industrial</h2>
                        <p>
                            Классический FreshCraft с упором на тех. 
                            развитие с преобладанием промышленного производства, 
                            энергетики и металлургии. 
                            Стройте заводы, механизмы, сложные 
                            конструкции и изучайте технологии!
                        </p>
                    </div>
                </div>

                <a href="#" class="btn_ news_btn big-button">
                    <svg viewBox="0 0 512 512">
                        <path d="M416 224v-64h-64V96h-64V32h-64v192H32v64h192v192h64v-64h64v-64h64v-64h64v-64h-64z"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="corner corn-bottom">
            <img src="{{asset('assets/images/ui-icons/corner.png')}}">
            <img src="{{asset('assets/images/ui-icons/corner.png')}}">
        </div>
    </div>
</section>

<section class="server_info">
    <div class="trans-top"></div>
    <div class="server_info__wrapper">
        <h1>СЕРВЕРА - УЖЕ СКОРО!</h1>
        <div class="info_container row_reverse">
            <img src="{{asset('assets/images/1_tmp/Minecraft_600x360.jpeg')}}" alt="cover">
            <div class="container_text">
                <h2>
                    ПРИСОЕДЕНЯЙСЯ К ИГРОКАМ НА СЕРВЕР
                </h2>
                <p>
                Играть с друзьями намного интереснее, особенно когда их так много! 
                Заходите на сервера и развивайтесь вместе со всеми игроками. 
                Придумай то, кем ты будешь и войди в свою роль. Потрясающая атмосфера, отсутствие привата, войс чат и ничего лишнего
                </p>
            </div>
        </div>

        <div class="info_container">
            <img src="{{asset('assets/images/1_tmp/Minecraft_600x360.jpeg')}}" alt="cover">
            <div class="container_text">
                <h2>
                    МЫ ЗА АДЕКВАТНОЕ КАМЬЮНИТИ
                </h2>
                <p>
                    Столбы, засорение ландшафта, однообразные и страшные 
                    авто-фермы не приветствуются! Внимательная и строгая 
                    администрация не допустит нарушения правил, 
                    испорченной атмосферы и общего впечатления от игры 
                    на сервере, играйте спокойно и с удовольствием!
                </p>
            </div>
        </div>

        <div class="info_container row_reverse">
            <img src="{{asset('assets/images/1_tmp/Minecraft_600x360.jpeg')}}" alt="cover">
            <div class="container_text">
                <h2>
                    ИНТЕРЕСНОЕ СОЧЕТАНИЕ ЧАСТИЧНОГО РП И АНАРХИИ
                </h2>
                <p>
                    Вы можете объединятся с другими игроками, 
                    создавать свои условные племена, или кланы, обмениваться 
                    ресурсами и даже например объявлять войны другим кланам. 
                    Но имейте ввиду, что на каждого преступника 
                    найдётся свой суд! Дайте волю фантазии, всё в ваших руках!
                </p>
            </div>
        </div>
        
        <a href="#" class="big-button" style="margin-top:25px;">ПОДОРОБНЕЕ...</a>
    </div>
    <div class="trans-bottom"></div>
</section>

<section class="sect__more">
    <div class="news_container">
        <h1>ОБНОВЛЕНИЯ И НОВОСТИ</h1>
        <div class="container_wrapper">
            <a href="#" class="btn_ news_btn big-button">
                <svg viewBox="0 0 512 512">
                    <path d="M96 288v64h64v64h64v64h64V288h192v-64H288V32h-64v64h-64v64H96v64H32v64h64z"></path>
                </svg>
            </a>

            <div class="more_containers">
                <div class="content_container">
                    <img src="{{asset('assets/images/1_tmp/cover_news.jpg')}}">
                    <h2>СКЛАДЫ ЛОМЯТСЯ ОТ ЗЕРНА</h2>
                    <p>
                        Экономическая повестка сегодняшнего дня бодрит
                    </p>
                </div>
                <div class="content_container">
                    <img src="{{asset('assets/images/1_tmp/cover_news.jpg')}}">
                    <h2>СКЛАДЫ ЛОМЯТСЯ ОТ ЗЕРНА</h2>
                    <p>
                        Экономическая повестка сегодняшнего дня бодрит
                    </p>
                </div>
                <div class="content_container">
                    <img src="{{asset('assets/images/1_tmp/cover_news.jpg')}}">
                    <h2>СКЛАДЫ ЛОМЯТСЯ ОТ ЗЕРНА</h2>
                    <p>
                        Экономическая повестка сегодняшнего дня бодрит
                    </p>
                </div>
            </div>

            <a href="#" class="btn_ news_btn big-button">
                <svg viewBox="0 0 512 512">
                    <path d="M416 224v-64h-64V96h-64V32h-64v192H32v64h192v192h64v-64h64v-64h64v-64h64v-64h-64z"></path>
                </svg>
            </a>
        </div>
        <a href="#" class="big-button">БОЛЬШЕ</a>
    </div>
</section>
@endsection
