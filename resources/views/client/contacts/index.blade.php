@extends('client_layouts.contacts.index')

@section('content-main')
    <div class="main" style="margin-top: 83px;">
        <div class="contacts">
            <div class="contacts__title-box">
                <h2 class="contacts__title">Контакты</h2>
                <p class="contacts__description">
                    Все полезные ссылки на источники информации: тех-поддержка, новости, сообщества и каналы
                </p>
            </div>
            <div class="contacts__card-wrapper card-wrapper">

                <div class="card-wrapper__card card card_second">
                    <div class="card__image_blur">
                        <img src="{{ asset('assets/images/socials/telegram-px.svg') }}" alt="vk"/>
                    </div>
                    <div class="card__image">
                        <img src="{{ asset('assets/images/socials/telegram-px.svg') }}" alt="vk"/>
                    </div>
                    <div class="card__description">
                        <h3 class="card__title">Telegram</h3>
                        <p class="card__text">
                            Хотите получать новости в телеграмме?
                            Подписывайтесь и всегда будьте в курсе событий!
                        </p>
                        <a class="gui_button" target="_blank" href="https://t.me/grapecreate">
                            <div class="horisontal"></div>
                            <p>Перейти</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </div>

                <div class="card-wrapper__card card">
                    <div class="card__image_blur">
                        <img src="{{ asset('assets/images/socials/boosty-px.svg') }}" alt="tg"/>
                    </div>
                    <div class="card__image">
                        <img src="{{ asset('assets/images/socials/boosty-px.svg') }}" alt="tg"/>
                    </div>
                    <div class="card__description">
                        <h3 class="card__title">Boosty</h3>
                        <p class="card__text">
                            Получайте эксклюзивный контент и поддерживайте творчество автора!
                        </p>
                        <a class="gui_button" target="_blank" href="https://boosty.to/grapecreate">
                            <div class="horisontal"></div>
                            <p>Глянуть</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </div>

                <div class="card-wrapper__card card card_pre-last">
                    <div class="card__image_blur">
                        <img src="{{ asset('assets/images/socials/youtube-px.svg') }}" alt="yt"/>
                    </div>
                    <div class="card__image">
                        <img src="{{ asset('assets/images/socials/youtube-px.svg') }}" alt="yt"/>
                    </div>
                    <div class="card__description">
                        <h3 class="card__title">YouTube</h3>
                        <p class="card__text">
                            Обзоры модов и сборки от создателя FreshCraft.
                            Основной канал на Ютуб - Grape Create!
                        </p>
                        <a class="gui_button" target="_blank"
                           href="https://www.youtube.com/channel/UCvbAKuWO0fOGxQ1mCBFAhzg">
                            <div class="horisontal"></div>
                            <p>Смотреть</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </div>

                <div class="card-wrapper__card card">
                    <div class="card__image_blur">
                        <img src="{{ asset('assets/images/socials/discord-px.svg') }}" alt="ds"/>
                    </div>
                    <div class="card__image">
                        <img src="{{ asset('assets/images/socials/discord-px.svg') }}" alt="ds"/>
                    </div>
                    <div class="card__description">
                        <h3 class="card__title">Discord</h3>
                        <p class="card__text">
                            Тех-Поддержка, общение, новости!
                            Присоединяйтесь к нашему Дискорд сообществу.
                        </p>
                        <a class="gui_button" target="_blank" href="https://discord.gg/26pmYEkfGM">
                            <div class="horisontal"></div>
                            <p>Общаться</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </div>

                <div class="card-wrapper__card card card_second">
                    <div class="card__image_blur">
                        <img src="{{ asset('assets/images/socials/vk-px.svg') }}" alt="vk"/>
                    </div>
                    <div class="card__image">
                        <img src="{{ asset('assets/images/socials/vk-px.svg') }}" alt="vk"/>
                    </div>
                    <div class="card__description">
                        <h3 class="card__title">VKontakte</h3>
                        <p class="card__text">
                            Пользуйтесь ВКонтакте?
                            У создателя проекта так же есть группа с новостями и не только!
                        </p>
                        <a class="gui_button" target="_blank" href="https://vk.com/public193542939">
                            <div class="horisontal"></div>
                            <p>Читать</p>
                            <div class="vertical"></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
