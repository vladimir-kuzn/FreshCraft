<!DOCTYPE html>
<html lang="ru">

    @yield('content-head')

    <body>
    <header>
            <div class="header__container">
                <div class="header__wrapper">
                    <div class="header__links">
                        <a href="#">СООБЩЕСТВО</a>
                        <a href="{{ route('contacts') }}">КОНТАКТЫ</a>
                        <a href="#">ПРАВИЛА</a>
                    </div>
                    <div class="header__getfresh">
                        @if(Auth::check())
                            <ul class="main_ul">
                                <a class="user_btn" href="#">{{ Auth::user()->getAttribute('nickname') }}</a>
                                <ul class="second_ul">
                                    <a class="gui_button" href="#">
                                        <div class="horisontal"></div>
                                        <p>Профиль</p>
                                        <div class="vertical"></div>
                                    </a>
                                    @role('admin')
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
                            <p style="font-size: 28px">ПОЛУЧИТЬ ЛАУНЧЕР</p>
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
                        <img src="{{asset('assets/images/logos/logo-pheonix.svg')}}" alt="logo pheonix">
                        <h1 class="logo_grape">GRAPE <br> CREATE</h1>
                    </div>
                    <p>© Mojang, 2009-2022. Товарный знак "Minecraft" принадлежит компании Mojang Synergies AB</p>
                    <hr style="width: 100%;">
                    <p>Вся размещенная информация на сайте не является публичной офертой.
                        Мы никоим образом не связаны с Mojang, AB.</p>
                    <p>All information posted on the site is not a public offer.
                        We are in no way affiliated with Mojang, AB.</p>
                </div>
                <div class="sitemap">
                    <div>
                        <h3>Пример категории</h3>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                    </div>
                    <div>
                        <h3>Пример категории</h3>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                    </div>
                    <div>
                        <h3>Пример категории</h3>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                    </div>
                    <div>
                        <h3>Пример категории</h3>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                    </div>
                    <div>
                        <h3>Пример категории</h3>
                        <a href="#">Страница</a>
                        <a href="#">Страница</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>

    <script>
        $(function () {
            $(document).click((e) => {
                const {target} = e;
                if(target.nodeName === 'A' && target.getAttribute('href') === '#') {
                    e.preventDefault();
                };
            });
        });
    </script>
</html>
