@extends('client_layouts.main.index')

@section('content-main')
    <section class="sect__welcome">
        <div class="slide_image">
            <img src="{{asset('assets/images/posters/poster (21).webp')}}" alt="background" class="show">
            <img src="{{asset('assets/images/posters/poster (1).webp')}}" alt="background" class="">
            <img src="{{asset('assets/images/posters/poster (2).webp')}}" alt="background" class="">
            <img src="{{asset('assets/images/posters/poster (5).webp')}}" alt="background" class="">
            <img src="{{asset('assets/images/posters/poster (6).webp')}}" alt="background" class="">
            <img src="{{asset('assets/images/posters/poster (9).webp')}}" alt="background" class="">
            <img src="{{asset('assets/images/posters/poster (14).webp')}}" alt="background" class="">
            <img src="{{asset('assets/images/posters/poster (20).webp')}}" alt="background" class="">
            <img src="{{asset('assets/images/posters/poster (18).webp')}}" alt="background" class="">
            <img src="{{asset('assets/images/posters/poster (30).webp')}}" alt="background" class="">
        </div>

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
            <a class="gui_button" href="{{ route('launcher') }}">
                <div class="horisontal"></div>
                <p style="padding: 5px 15px; font-size: 36px">ИГРАТЬ!</p>
                <div class="vertical"></div>
            </a>
        </div>
    </section>

    <section class="sect__more box-shadow_111111">
        <div class="more-games_container">
            <div class="corner corn-top">
                <img src="{{asset('assets/images/ui-icons/corner.png')}}">
                <img src="{{asset('assets/images/ui-icons/corner.png')}}">
            </div>
            <div class="more-games_wrapper">
                <div class="container_wrapper">
                    <div class="more_containers">
                        <div class="content_container" style="margin-bottom: 20px">
                            <
                            <img src="{{asset('assets/images/covers/Classic.webp')}}" style="margin-right: 20px">
                            <div>
                                <h2 style="font-size: 36px;">FreshCraft</h2>
                                <p style="font-size: 26px;">
                                    FreshCraft Classic - Это сборка модов майнкрафт,
                                    целью которой является освежить и улучшить
                                    впечатления от ванильного выживания.
                                    Основной упор сделан на приключения
                                </p>
                            </div>
                        </div>
                        <div class="content_container">
                            <div style="display: flex; flex-direction: row; margin-right: 20px; align-items: center">
                                <img src="{{asset('assets/images/covers/Fantasy-GrayScale.webp')}}" style="max-height: 200px">
                                <div style="width: 300px;">
                                    <h2 style="font-size: 16px">FreshCraft Fantasy - DLC</h2>
                                    <p>
                                        Мифологические и сказочные существа, могущественных боссы!
                                        Изучайте магию и покоряйте новые таинственные измерения!
                                    </p>
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: row; align-items: center">
                                <img src="{{asset('assets/images/covers/Industrial-GrayScale.webp')}}" style="max-height: 200px">
                                <div style="width: 300px;">
                                    <h2 style="font-size: 16px">FreshCraft Industrial - DLC</h2>
                                    <p>
                                        Преобладание промышленного производства, энергетики и металлургии.
                                        Заводы, механизмы, сложные конструкции и технологии!!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <img src="{{asset('assets\images\posters\poster (22).webp')}}" alt="cover">
                <div class="container_text">
                    <h2>
                        ПРИСОЕДЕНЯЙСЯ К ИГРОКАМ НА СЕРВЕР
                    </h2>
                    <p>
                        Играть с друзьями намного интереснее, особенно когда их так много!
                        Заходите на сервера и развивайтесь вместе со всеми игроками.
                        Придумай то, кем ты будешь и войди в свою роль. Потрясающая атмосфера, отсутствие привата, войс
                        чат и ничего лишнего
                    </p>
                </div>
            </div>

            <div class="info_container">
                <img src="{{asset('assets\images\posters\poster (9).webp')}}" alt="cover">
                <div class="container_text">
                    <h2>
                        МЫ ЗА АДЕКВАТНОЕ КОМЬЮНИТИ
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
                <img src="{{asset('assets\images\posters\poster (14).webp')}}" alt="cover">
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
            <a class="gui_button" style="margin-top:25px;" href="#">
                <div class="horisontal"></div>
                <p>ПОДОРОБНЕЕ...</p>
                <div class="vertical"></div>
            </a>
        </div>
        <div class="trans-bottom"></div>
    </section>

    <section class="sect__more">
        <div class="news_container">
            <h1>ОБНОВЛЕНИЯ И НОВОСТИ</h1>
            <div class="container_wrapper">
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
            </div>
            <a class="gui_button" style="margin-top:25px;" href="#">
                <div class="horisontal"></div>
                <p>БОЛЬШЕ</p>
                <div class="vertical"></div>
            </a>
        </div>
    </section>
@endsection
