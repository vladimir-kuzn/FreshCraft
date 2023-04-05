@extends('client_layouts.layout')
@section('title', 'FRESHCRAFT | ТОВАРЫ')
@section('content')
    <div class="bg-dark-bg accent-main-purple">
        <div
            x-data="{ filter_isOpen: false }">
            <!--
              Mobile filter dialog
              Off-canvas filters for mobile, show/hide based on off-canvas filters state.
            -->
            <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                <!--
                  Off-canvas menu backdrop, show/hide based on off-canvas menu state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="fixed inset-0 bg-black bg-opacity-25"
                     x-show="filter_isOpen"
                     x-transition:enter="transition-opacity ease-linear duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition-opacity ease-linear duration-300"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     @click="filter_isOpen = !filter_isOpen"></div>

                <div class="fixed inset-0 z-40 flex"
                     x-show="filter_isOpen"
                     x-transition:enter="transition ease-in-out duration-300 transform"
                     x-transition:enter-start="translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300 transform"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="translate-x-full">
                    <!--
                      Off-canvas menu, show/hide based on off-canvas menu state.

                      Entering: "transition ease-in-out duration-300 transform"
                        From: "translate-x-full"
                        To: "translate-x-0"
                      Leaving: "transition ease-in-out duration-300 transform"
                        From: "translate-x-0"
                        To: "translate-x-full"
                    -->
                    <div
                        class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl"
                        x-show="filter_isOpen"
                        x-transition:enter="transition ease-in-out duration-300 transform"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in-out duration-300 transform"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full">
                        <div class="flex items-center justify-between px-4">
                            <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                            <button type="button"
                                    class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400"
                                    @click="filter_isOpen = !filter_isOpen">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Filters -->
                        <form class="mt-4 border-t border-gray-200">
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                                <li>
                                    <a href="#" class="block px-2 py-3">Totes</a>
                                </li>

                                <li>
                                    <a href="#" class="block px-2 py-3">Backpacks</a>
                                </li>

                                <li>
                                    <a href="#" class="block px-2 py-3">Travel Bags</a>
                                </li>

                                <li>
                                    <a href="#" class="block px-2 py-3">Hip Bags</a>
                                </li>

                                <li>
                                    <a href="#" class="block px-2 py-3">Laptop Sleeves</a>
                                </li>
                            </ul>

                            <div class="border-t border-gray-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button"
                                            class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                            aria-controls="filter-section-mobile-1" aria-expanded="false">
                                        <span class="font-medium text-gray-900">Category</span>
                                        <span class="ml-6 flex items-center">
                                                                        <!-- Expand icon, show/hide based on section open state. -->
                                                                        <svg class="h-5 w-5" viewBox="0 0 20 20"
                                                                             fill="currentColor"
                                                                             aria-hidden="true">
                                                                          <path
                                                                              d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"/>
                                                                        </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                                                        <svg class="h-5 w-5" viewBox="0 0 20 20"
                                                                             fill="currentColor"
                                                                             aria-hidden="true">
                                                                          <path fill-rule="evenodd"
                                                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                                                clip-rule="evenodd"/>
                                                                        </svg>
                                                                      </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-mobile-1">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-0" name="category[]" value="new-arrivals"
                                                   type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-0"
                                                   class="ml-3 min-w-0 flex-1 text-gray-500">Все товары</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-1" name="category[]" value="sale"
                                                   type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-1"
                                                   class="ml-3 min-w-0 flex-1 text-gray-500">Sale</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-2" name="category[]" value="travel"
                                                   type="checkbox" checked
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-2"
                                                   class="ml-3 min-w-0 flex-1 text-gray-500">Travel</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-3" name="category[]" value="organization"
                                                   type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-3"
                                                   class="ml-3 min-w-0 flex-1 text-gray-500">Organization</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-4" name="category[]" value="accessories"
                                                   type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-4"
                                                   class="ml-3 min-w-0 flex-1 text-gray-500">Accessories</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray-200 pt-24 pb-6">
                    <h1 class="text-4xl font-bold tracking-tight text-white">Все товары</h1>

                    <div class="flex items-center">
                        <div class="relative inline-block text-left"
                             x-data="{ sort_isOpen: false }">
                            <div>
                                <button type="button"
                                        class="group inline-flex justify-center text-sm font-medium text-white hover:text-white"
                                        id="menu-button" aria-expanded="false" aria-haspopup="true"
                                        @click="sort_isOpen = !sort_isOpen">
                                    Сортировка
                                    <svg
                                        class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>

                            <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                            <div
                                class="absolute right-0 z-10 mt-2 w-40 origin-top-right bg-my-gray shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                x-show="sort_isOpen"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95">
                                <div class="py-1" role="none">
                                    <!--
                                      Active: "bg-gray-100", Not Active: ""

                                      Selected: "font-medium text-white", Not Selected: "text-gray-500"
                                    -->
                                    <a href="#" class="font-medium text-white block px-4 py-2 text-sm"
                                       role="menuitem" tabindex="-1" id="menu-item-0">Популярные</a>

                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="menu-item-2">Новые</a>

                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="menu-item-3">Сначала дешёвые</a>

                                    <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                       tabindex="-1" id="menu-item-4">Сначала дорогие</a>
                                </div>
                            </div>
                        </div>

                        <button type="button"
                                class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden"
                                @click="filter_isOpen = !filter_isOpen">
                            <span class="sr-only">Filters</span>
                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <section aria-labelledby="products-heading" class="pt-6 pb-24">
                    <h2 id="products-heading" class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                        <!-- Filters -->
                        <form class="hidden lg:block">
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list"
                                class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-white">
                                <li>
                                    <a href="#">Totes</a>
                                </li>

                                <li>
                                    <a href="#">Backpacks</a>
                                </li>

                                <li>
                                    <a href="#">Travel Bags</a>
                                </li>

                                <li>
                                    <a href="#">Hip Bags</a>
                                </li>

                                <li>
                                    <a href="#">Laptop Sleeves</a>
                                </li>
                            </ul>

                            <div class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button"
                                            class="flex w-full items-center justify-between bg-my-gray py-3 text-sm text-gray-400 hover:text-gray-500"
                                            aria-controls="filter-section-1" aria-expanded="false">
                                        <span class="font-medium text-white ml-2">Category</span>
                                        <span class="ml-6 flex items-center">
                                        <!-- Expand icon, show/hide based on section open state. -->
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path
                                              d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"/>
                                        </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                clip-rule="evenodd"/>
                                        </svg>
                                      </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-1">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-category-0" name="category[]" value="new-arrivals"
                                                   type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-0" class="ml-3 text-sm text-white">New
                                                Arrivals</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-category-1" name="category[]" value="sale"
                                                   type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-1"
                                                   class="ml-3 text-sm text-white">Sale</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-category-2" name="category[]" value="travel"
                                                   type="checkbox" checked
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-2"
                                                   class="ml-3 text-sm text-white">Travel</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-category-3" name="category[]" value="organization"
                                                   type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-3"
                                                   class="ml-3 text-sm text-white">Organization</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-category-4" name="category[]" value="accessories"
                                                   type="checkbox"
                                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-4"
                                                   class="ml-3 text-sm text-white">Accessories</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <div class="grid grid-cols-2 xl:grid-cols-4 md:grid-cols-3 gap-6 my-8 p-6">
                                @for ($b = 0; $b < 8; $b++)
                                    <div
                                        class="my-2 xl:my-0 mx-2 xl:mx-0 bg-gradient-to-b from-dark-purple shadow-xl flex flex-col items-center transition ease-out delay-100 hover:scale-110 duration-300">
                                        <a href="#">
                                            <img class="max-h-48 xl:max-w-fit"
                                                 src="{{asset('assets/images/products/ticket.png')}}"
                                                 alt="product">
                                        </a>
                                        <div
                                            class="flex flex-col justify-center items-center bg-gradient-to-t from-main-purple px-3 py-2 w-full">
                                            <a href="#">
                                                <h1 class="text-lg lg:text-xl text-white font-medium text-center max-w-[180px] xl:w-[245px]">
                                                    Название товара
                                                </h1>
                                            </a>
                                            <div
                                                class="text-lg lg:text-xl text-my-dark-grey font-medium flex justify-center p-1 mt-4 bg-main-purple mb-2">
                                                <h2
                                                    class="text-dark-purple font-bold">500.00 ₽</h2>
                                            </div>
                                            <button
                                                class="w-full bg-main-purple text-white text-center font-bold py-2 px-4 border-b-8 hover:border-b-4 active:hover:border-b border-dark-purple uppercase inline-flex justify-center items-center">
                                                <p class="">
                                                    Купить
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection
