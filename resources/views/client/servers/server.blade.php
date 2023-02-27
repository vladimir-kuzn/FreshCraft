@extends('client_layouts.servers.server')

@section('content-main')
    <section class="sect__welcome">
        <img class="bg_image" src="{{ asset('assets/images/service_obl/bg_launcher_page.webp') }}" alt="background">
        <div class="filter_on_poster"></div>
        <div class="welcome_container">
            <div class="weclome_wrapper">
                <p>ПРИВАТНЫЕ СЕРВЕРА FRESHCRAFT</p>
                <h1>FRESHCRAFT CLASSIC</h1>
                <p>Приобретая данный товар вы получаете доступ к игровому серверу FreshCraft Classic</p>
                <a class="gui_button" href="#">
                    <div class="horisontal"></div>
                    <p>КУПИТЬ</p>
                    <div class="vertical"></div>
                </a>
            </div>
        </div>
    </section>

    <section class="description">
        <div>
            <h2>
                Уникальное сочетание рп и анархии, адекватное комьюнити,
                внимательная администрация, потрясающая атмосфера,
                отсутсвие привата - всё это сервера FreshCraft.
                Исследуйте новые данжи, покаряйте новые горизонты и наслаждайтесь
                многообразием модов! Здесь вы можете стать кем угодно!
            </h2>
        </div>
    </section>

    <hr style="margin: 0; color: #111111">

    <section class="info">
        <h1>ОЗНАКОМТЬТЕСЬ С СЕРВЕРОМ</h1>
        <h3>
            На серверах FreshCraft может поиграть каждый!
            Но нужно знать и соблюдать правила.<br>
            Вся информация находится здесь.
        </h3>
        <div>
            <div class="container_left">
                <h2>ПРАВИЛА</h2>
                <p>
                    Столбы, засорение ландшафта, однообразные и страшные авто-фермы не приветствуются!
                    Внимательная и строгая администрация не допустит нарушения правил,
                    испорченной атмосферы и общего впечатления от игры на сервере, играйте спокойно и с удовольствием!
                </p>
                <div>
                    <a class="gui_button" href="{{ route('launcher') }}">
                        <div class="horisontal"></div>
                        <p>Изучить</p>
                        <div class="vertical"></div>
                    </a>
                    <img src="https://education.minecraft.net/content/dam/education-edition/logos/inventory-map.png"
                         alt="icon">
                </div>
            </div>
            <div class="container_right">
                <h2>ЗНАКОМСТВО</h2>
                <p>
                    Придумай то, кем ты будешь и войди в свою роль.
                    Вы можете объединятся с другими игроками, создавать свои условные племена, или кланы,
                    обмениваться ресурсами и даже например объявлять войны другим кланам.
                    Дайте волю фантазии, всё в ваших руках!
                </p>
                <div>
                    <a class="gui_button" href="#">
                        <div class="horisontal"></div>
                        <p>Ознакомиться</p>
                        <div class="vertical"></div>
                    </a>
                    <img src="https://education.minecraft.net/content/dam/education-edition/logos/inventory-map.png"
                         alt="icon">
                </div>
            </div>
        </div>
    </section>
@endsection
