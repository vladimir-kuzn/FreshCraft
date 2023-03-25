<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.7">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script
            src="https://code.jquery.com/jquery-3.6.4.min.js"
            crossorigin="anonymous">
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.scss')
        <style>
            * {font-family: 'Noto Sans', serif;}
        </style>
    </head>
    <body class="antialiased">
        <header class="px-10 py-4 py-4 flex flex-col xl:flex-row bg-dark-bg text-white justify-center items-center relative">
            <a href="{{ route('home') }}" class="absolute max-w-[200px] xl:max-w-[300px] py-3 flex justify-center items-center">
                <img src="{{ asset('assets/images/logos/minecraft_fresh.png') }}" alt="Freshcraft" class="h-full">
            </a>
            <div class="flex flex-col lg:flex-row justify-between w-full ">
                <div class="flex justify-center items-center space-x-5 text-base font-semibold uppercase">
                    <a href="{{ route('posts.') }}">Новости</a>
                    <a href="{{ route('contacts') }}">Контакты</a>
                    <a href="{{ route('severs.') }}">Сервера</a>
                    <a href="{{ route('packs.') }}">Сборки</a>
                </div>
                <div class="flex justify-center items-center space-x-5">
                    <img src="{{ asset('assets/images/1_tmp/Website_in_development.png') }}" alt="Website_in_development" class="max-w-[250px] hidden min-[1650px]:flex">
                    <a href="#" class="bg-main-purple text-white text-center font-bold py-2 px-4 border-b-8 hover:border-b-4 active:hover:border-b border-dark-purple uppercase inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                        Войти
                    </a>
                    <a href="#" class="bg-main-purple text-white text-center font-bold py-2 px-4 border-b-8 hover:border-b-4 active:hover:border-b border-dark-purple uppercase">
                        Получить Freshcraft
                    </a>
                </div>
            </div>

        </header>
        @yield('content')
        <footer class="xl:py-8 py-4 bg-black text-white flex flex-col justify-center xl:items-center overflow-hidden">
            <div class="flex flex-col xl:flex-row justify-between xl:items-center mb-2 w-fit ml-10 xl:ml-0 xl:space-x-24">
                <div class="flex flex-col mb-4 xl:mb-0">
                    <div class="flex items-center">
                        <h1 class="min-h-min font-semibold text-2xl text-my-dark-grey mr-2">FRESHCRAFT</h1>
                    </div>
                    <span class="text-my-grey font-normal text-left my-5">
                        Гусев Артемий Витальевич <br>
                        ИНН 701728516338 <br>
                        jackplay285@gmail.com
                    </span>
                    <div class="bg-white text-black w-fit p-2 rounded font-bold">Server status: <span class="server_status p-1 rounded">Checking...</span></div>
                </div>
                <div class="flex flex-col text-main-purple">
                    <div class="flex flex-col mb-4">
                        <h1 class="text-lg font-medium text-my-dark-grey mb-2">
                            Сборки
                        </h1>
                        <a href="{{ route('packs.') }}" class="text-base font-normal text-my-grey mb-1">
                            FRESHCRAFT
                        </a>
                        <a href="{{ route('packs.pack', 'industrial') }}" class="text-base font-normal text-my-grey mb-1">
                            Industrial DLC
                        </a>
                        <a href="{{ route('packs.pack', 'fantasy') }}" class="text-base font-normal text-my-grey mb-1">
                            Fantasy DLC
                        </a>
                    </div>
                    <div class="flex flex-col mb-4">
                        <h1 class="text-lg font-medium text-my-dark-grey mb-2">
                            Сервера
                        </h1>
                        <a href="{{ route('severs.') }}" class="text-base font-normal text-my-grey mb-1">
                            Все сервера
                        </a>
                        <a href="{{ route('severs.server', 'freshcraft-classic') }}" class="text-base font-normal text-my-grey mb-1">
                            Freshcraft Classic
                        </a>
                    </div>
                </div>
                <div class="flex flex-col text-main-purple">
                    <div class="flex flex-col mb-4">
                        <h1 class="text-lg font-medium text-my-dark-grey mb-2">
                            Играть
                        </h1>
                        <a href="{{ route('launcher') }}" class="text-base font-normal text-my-grey mb-1">
                            Лаунчер
                        </a>
                    </div>
                    <div class="flex flex-col mb-4">
                        <h1 class="text-lg font-medium text-my-dark-grey mb-2">
                            Покупки
                        </h1>
                        <a href="{{ route('shop.') }}" class="text-base font-normal text-my-grey mb-1">
                            Магазин
                        </a>
                        <a href="https://boosty.to/grapecreate" target="_blank" class="text-base font-normal text-my-grey mb-1">
                            Boosty!
                        </a>
                    </div>
                </div>
                <div class="flex flex-col text-main-purple">
                    <div class="flex flex-col mb-4">
                        <h1 class="text-lg font-medium text-my-dark-grey mb-2">
                            О нас
                        </h1>
                        <a href="{{ route('legal') }}" class="text-base font-normal text-my-grey mb-1">
                            Договор оферты
                        </a>
                        <a href="{{ route('legal') }}" class="text-base font-normal text-my-grey mb-1">
                            Политика конфид.
                        </a>
                        <a href="{{ route('about') }}" class="text-base font-normal text-my-grey mb-1">
                            Общая информация
                        </a>
                    </div>
                    <div class="flex flex-col mb-4">
                        <h1 class="text-lg font-medium text-my-dark-grey mb-2">
                            Новости
                        </h1>
                        <a href="{{ route('posts.') }}" class="text-base font-normal text-my-grey mb-1">
                            Все новости
                        </a>
                    </div>
                </div>
            </div>
            <p class="text-gray-600 text-center text-sm mb-2">
                © Mojang, 2009-2022. Товарный знак "Minecraft" принадлежит компании Mojang Synergies AB
                <br>
                Вся размещенная информация на сайте не является публичной офертой. Мы никоим образом не связаны с Mojang, AB.
                <br>
                All information posted on the site is not a public offer. We are in no way affiliated with Mojang, AB.
            </p>
            <hr class=" w-full border-t-1 border-my-dark-grey">
            <div class="flex justify-center items-center space-x-2">
                <p class="">
                    Site by
                </p>
                <a href="https://pheo.dev" target="_blank" class="bg-white p-1 m-3 rounded-lg">
                    <h1 is="type-async" id="type-text" class="text-black font-bold">PHEO.DEV</h1>
                </a>
                <p>
                    in 2023
                </p>
            </div>
        </footer>
    </body>
    <script>
        let url = "/health";
        $.ajax(url,{crossOrigin: true,})
            .done(function (){
                $(".server_status").css( "background-color", "#93c47d" );
                $(".server_status").css( "color", "#38761d" );
                $(".server_status").html("Running");
            })
            .fail(function (){
                $(".server_status").css( "background-color", "#e06666" );
                $(".server_status").css( "color", "#990000" );
                $(".server_status").html("Not running");
            })
    </script>
</html>
