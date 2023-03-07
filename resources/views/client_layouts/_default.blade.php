<!DOCTYPE html>
<html lang="ru">

    @yield('content-head')

    <body>
    <header>
            <div class="header__container">
                <div class="header__wrapper">
                    <div class="header__links">
                        <a href="{{ route('posts.') }}">НОВОСТИ</a>
                        <a href="{{ route('contacts') }}">КОНТАКТЫ</a>
                        <a href="{{ route('severs.') }}">СЕРВЕРА</a>
                        <a href="{{ route('packs.') }}">СБОРКИ</a>
                    </div>
                    <div class="header__getfresh">
                        <img src="{{ asset('assets/images/1_tmp/Website_in_development.png') }}" alt="Сайт в разработке" style="margin-right: 20px">
                        @if(Auth::check())
                            <ul class="main_ul">
                                <a class="user_btn" href="#">{{ Auth::user()->getAttribute('nickname') }}</a>
                                <ul class="second_ul">
                                    <a class="gui_button" href="#">
                                        <div class="horisontal"></div>
                                        <p>Профиль</p>
                                        <div class="vertical"></div>
                                    </a>
                                    @role('super_admin')
                                        <a class="gui_button" href="{{ route('admin.') }}">
                                            <div class="horisontal"></div>
                                            <p>ADMIN</p>
                                            <div class="vertical"></div>
                                        </a>
                                    @endrole
                                    <a class="gui_button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <div class="horisontal"></div>
                                        <p>Выход</p>
                                        <div class="vertical"></div>
                                    </a>
                                </ul>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                @csrf
                            </form>
                        @else
                            <a class="button_login" href="{{ route('login') }}">ВОЙТИ</a>
                        @endif
                        <a class="gui_button" href="{{ route('launcher') }}">
                            <div class="horisontal"></div>
                            <p>ПОЛУЧИТЬ FRESHCRAFT</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </div>

                <div class="header__logo">
                    <a href="{{ route('index') }}">
                        <img src="{{asset('assets/images/logos/minecraft_fresh.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </header>

        @yield('content-main')

        <footer>
            <div class="footer_wrapper">
                <div class="info-legal">
                    <div class="footer_logos">
                        <a href="https://pheo-design.ru" target="_blank">
                            <img src="{{asset('assets/images/logos/logo-pheonix.svg')}}" alt="logo pheonix">
                        </a>
                        <a href="https://www.youtube.com/channel/UCvbAKuWO0fOGxQ1mCBFAhzg" target="_blank">
                            <h1 class="logo_grape">GRAPE <br> CREATE</h1>
                        </a>
                    </div>
                    <p>© Mojang, 2009-2022. Товарный знак "Minecraft" принадлежит компании Mojang Synergies AB</p>
                    <hr style="width: 100%;">
                    <p>Вся размещенная информация на сайте не является публичной офертой.
                        Мы никоим образом не связаны с Mojang, AB.</p>
                    <p>All information posted on the site is not a public offer.
                        We are in no way affiliated with Mojang, AB.</p>
                    <h3 class="server_status_color" style="color: white">
                        Server status:
                        <b class="server_status" style="background-color: #6fa8dc; color: #0b5394; padding: 5px; border-radius: 10px" >
                            Checking...
                        </b>
                    </h3>
                </div>
                <div class="sitemap">
                    <div>
                        <h3>
                            <a href="{{ route('packs.') }}">Сборки</a>
                        </h3>
                        <a href="{{ route('packs.pack', 'freshcraft') }}">FreshCraft ⚠️</a>
                        <a href="{{ route('packs.pack', 'industrial') }}">FreshCraft Industrial - DLC ⚠️</a>
                        <a href="{{ route('packs.pack', 'fantasy') }}">FreshCraft Fantasy - DLC ⚠️</a>
                        <a href="{{ route('launcher') }}">Лаунчер</a>
                    </div>
                    <div>
                        <h3>
                            <a href="#">Донат</a>
                        </h3>
                        <a href="https://boosty.to/grapecreate">Boosty</a>
                        <a href="{{ route('shop.') }}">Сервер - Товары ⚠️</a>
                    </div>
                    <div>
                        <h3>
                            <a href="{{ route('severs.') }}">Сервера</a>
                        </h3>
                        <a href="{{ route('severs.server', 'freshcraft') }}">FreshCraft ⚠️</a>
                        <a href="{{ route('severs.server', 'industrial') }}">Industrial ⚠️</a>
                        <a href="{{ route('severs.server', 'fantasy') }}">Fantasy ⚠️</a>
                    </div>
                    <div>
                        <h3>
                            <a href="#">Учётная запись</a>
                        </h3>
                        <a href="#">Профиль ⚠️</a>
                    </div>
                    <div>
                        <h3>
                            <a href="#">О нас</a>
                        </h3>
                        <a href="#">Основная информация ⚠️</a>
                        <a href="{{ route('contacts') }}">Контакты/Поддержка</a>
                        <a href="#">Политика конфидициальности ⚠️</a>
                        <a href="#">Разработчики ⚠️</a>
                    </div>
                </div>
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
