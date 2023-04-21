<section class="relative mx-auto z-50">
    <header class="bg-white pb-10">
        <div class="container flex items-center justify-between border-b border-gray-700 py-3">
            <div class="flex items-center">
                <div x-data="{ dropdownOpen: false }">
                    <div class="relative px-2 py-2 z-10 lg:hidden">
                        <a class="block lg:hidden" href="#"
                            class="flex items-center hover:text-white text-gray-400 font-semibold transition-colors duration-300"
                            @click="() => { setTimeout(() => { dropdownOpen = true }, 200) }"
                            @click="() => { dropdownOpen = false }">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                            </svg>
                        </a>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                            class="absolute mt-5 py-2 -translate-x-5 -translate-y-16 bg-slate-800 shadow-md rounded w-[25rem] transform transition-all duration-300 ease-out"
                            x-transition:enter="translate-y-0" x-transition:enter-start="-translate-y-[40rem]"
                            x-transition:enter-end="translate-y-0" x-transition:leave="translate-y-0"
                            x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-[60rem]">
                            <button class="text-gray-100 text-sm px-4 pt-2 pb-1 font-semibold"
                                @click="() => { dropdownOpen = false }">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                            <div class="flex flex-col h-screen">
                                <ul class="w-full text-gray-400 font-semibold">
                                    <li x-data="{ open: false }" class=" border-gray-200">
                                        <a href="#"
                                            class="flex items-center justify-between px-6 hover:text-white hover:bg-slate-600 py-2"
                                            x-on:click="open = !open">
                                            <p>Hosting</p>
                                            <svg class="w-5 h-5 translate-y-0.5" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                            </svg>
                                        </a>
                                        <div x-show="open" class="bg-slate-800 shadow-lg rounded-lg mt-1">
                                            <p href="#"
                                                class="px-4 pt-4 flex items-center text-xs hover:text-white text-gray-400 font-semibold transition-colors duration-300">
                                                Dale velocidad a tu hosting
                                            </p>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Hosting
                                                Wordpress</a>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Hosting SSD</a>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Hosting Correo</a>
                                            <p href="#"
                                                class="px-4 pt-5 flex items-center text-xs hover:text-white text-gray-400 font-semibold transition-colors duration-300">
                                                Destinado para tu tienda
                                            </p>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Hosting
                                                Prestashop</a>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Hosting Magento</a>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Hosting
                                                WooCommerce</a>
                                        </div>
                                    </li>

                                    <li x-data="{ open: false }" class=" border-gray-200">
                                        <a href="#"
                                            class="flex items-center justify-between px-6 hover:text-white hover:bg-slate-600 py-2"
                                            x-on:click="open = !open">
                                            <p>Dominios</p>
                                            <svg class="w-5 h-5 translate-y-0.5" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                            </svg>
                                        </a>
                                        <div x-show="open" class="bg-slate-800 shadow-lg rounded-lg mt-1 pb-3">
                                            <p href="#"
                                                class="px-4 pt-5 text-xs hover:text-white text-gray-400 font-semibold transition-colors duration-300">
                                                Destinado para tu tienda
                                            </p>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Registro de
                                                dominios</a>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Transferencia de
                                                dominios</a>
                                        </div>
                                    </li>

                                    <li x-data="{ open: false }" class=" border-gray-200">
                                        <a href="#"
                                            class="flex items-center justify-between px-6 hover:text-white hover:bg-slate-600 py-2"
                                            x-on:click="open = !open">
                                            <p>Servidores</p>
                                            <svg class="w-5 h-5 translate-y-0.5" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                            </svg>
                                        </a>
                                        <div x-show="open" class="bg-slate-800 shadow-lg rounded-lg mt-1 pb-3">
                                            <p href="#"
                                                class="px-4 pt-5 text-xs hover:text-white text-gray-400 font-semibold transition-colors duration-300">
                                                Alquila según tus necesidades
                                            </p>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Alquiler de
                                                servidores</a>
                                            <a href="#"
                                                class="flex items-center justify-between px-6 py-2 hover:bg-gray-400 text-white">
                                                Servidores para videojuegos
                                                <p
                                                    class=" bg-green-500/50 border border-green-500 text-xs font-semibold text-green-300 px-[5px] py-[1px]">
                                                    new</p>
                                            </a>
                                        </div>
                                    </li>

                                    <li x-data="{ open: false }" class=" border-gray-200">
                                        <a href="#"
                                            class="flex items-center justify-between px-6 hover:text-white hover:bg-slate-600 py-2"
                                            x-on:click="open = !open">
                                            <p>Nosotros</p>
                                            <svg class="w-5 h-5 translate-y-0.5" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                            </svg>
                                        </a>
                                        <div x-show="open" class="bg-slate-800 shadow-lg rounded-lg mt-1 pb-3">
                                            <p href="#"
                                                class="px-4 pt-5 text-xs hover:text-white text-gray-400 font-semibold transition-colors duration-300">
                                                ¿Tienes problemas? Contactanos
                                            </p>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Soporte
                                                técnico</a>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Nosotros</a>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">FAQ</a>
                                            <a href="#"
                                                class="block px-6 py-2 hover:bg-gray-400 text-white">Contacto</a>
                                        </div>
                                    </li>
                                    <li class=" border-gray-200">
                                        <a href="#"
                                            class="flex items-center justify-between px-6 hover:text-white hover:bg-slate-600 py-2 rounded-xl">
                                            <span>Mas Servicios</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="lg:w-60 w-48" src="/frontend/images/logo-grande.png" alt="">
            </div>

            <nav class="flex items-center text-xs text-gray-300">
                <div class="flex items-center text-black">
                    <svg class="hidden lg:block w-4 h-4 mr-1" fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                        </path>
                    </svg>
                    <p class="hidden lg:block mr-5">948 98 04 56</p>
                </div>
                <div class="flex items-center pr-5 text-black">
                    <svg class="hidden lg:block w-5 h-5 mr-1" fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                        </path>
                    </svg>
                    <p class="hidden lg:block">info@agradaweb.com</p>
                </div>
                <div>

                    <div x-data="{ dropdownOpen: false }">
                        <div class="relative px-2 py-2">
                            <a class="block lg:hidden" href="#"
                                class="flex items-center hover:text-white text-gray-400 font-semibold transition-colors duration-300"
                                @click="() => { setTimeout(() => { dropdownOpen = true }, 200) }"
                                @click="() => { dropdownOpen = false }">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                                    </path>
                                </svg>
                            </a>
                            <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                                class="absolute mt-5 py-2 -translate-x-44 bg-slate-800 shadow-md rounded w-56 transform transition-all duration-300 ease-out"
                                x-transition:enter="translate-y-0" x-transition:enter-start="-translate-y-80"
                                x-transition:enter-end="translate-y-0" x-transition:leave="translate-y-0"
                                x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-80">
                                <div class="flex items-center justify-between">
                                    <p class="text-gray-100 text-sm px-4 pt-2 pb-1 font-semibold">¿Estas registrado?
                                    </p>
                                    <button class="text-gray-100 text-sm px-4 pt-2 pb-1 font-semibold"
                                        @click="() => { dropdownOpen = false }">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-gray-300 text-xs px-4 py-2 font-semibold">Si estas registrado, inicia
                                    sesión ahora</p>
                                <a href="#"
                                    class="block px-4 pt-1 pb-1 text-sm font-semibold text-green-500 hover:bg-slate-700">
                                    Inciar sesión
                                </a>
                                <hr class=" bg-gray-700 my-4">
                                <p class="text-gray-100 text-sm px-4 pt-2 pb-1 font-semibold">¿Quieres registrarte?</p>
                                <p class="text-gray-300 text-xs px-4 py-2 font-semibold">Si no estas registrado puedes
                                    hacerlo ahora</p>
                                <a href="#"
                                    class="block px-4 pt-1 pb-3 text-sm font-semibold text-green-500 hover:bg-slate-700">
                                    Registrarse
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hidden container items-center lg:block">
            <nav class="flex justify-end" x-data="{ hover: false }">

                <div x-data="{ dropdownOpen: false }">
                    <div class="relative px-2 py-2">
                        <a href="#"
                            class="flex items-center hover:text-gray-500 text-black font-semibold transition-colors duration-300"
                            @click="() => { setTimeout(() => { dropdownOpen = true }, 200) }"
                            @click="() => { dropdownOpen = false }">
                            Hosting
                            <svg class="w-5 h-5 translate-y-0.5" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5">
                                </path>
                            </svg>
                        </a>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                            class="absolute mt-5 py-2 bg-slate-800 shadow-md rounded-xl w-72 transform transition-all duration-300 ease-out"
                            x-transition:enter="translate-y-0" x-transition:enter-start="-translate-y-8"
                            x-transition:enter-end="translate-y-0" x-transition:leave="translate-y-0"
                            x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-8">
                            <p href="#"
                                class="px-4 pt-2 flex items-center text-xs text-gray-400 font-semibold transition-colors duration-300">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                                </svg>
                                Dale velocidad a tu hosting
                            </p>
                            <a href="#"
                                class="block px-4 pt-2 pb-2 text-sm font-semibold text-white hover:bg-slate-700">
                                Hosting Wordpress
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-semibold text-white  hover:bg-slate-700">
                                Hosting SSD
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-semibold text-white hover:bg-slate-700">
                                Hosting Correo
                            </a>

                            <p href="#"
                                class="px-4 pt-5 flex items-center text-xs text-gray-400 font-semibold transition-colors duration-300">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                    </path>
                                </svg>
                                Destinado para tu tienda
                            </p>
                            <a href="#"
                                class="block px-4 pt-2 pb-2 text-sm font-semibold text-white hover:bg-slate-700">
                                Hosting Prestashop
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-semibold text-white hover:bg-slate-700">
                                Hosting Magento
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-semibold text-white hover:bg-slate-700">
                                Hosting WooCommerce
                            </a>
                        </div>
                    </div>
                </div>
                <div x-data="{ dropdownOpen: false }">
                    <div class="relative px-2 py-2">
                        <a href="#"
                            class="flex items-center hover:text-gray-500 text-black font-semibold transition-colors duration-300"
                            @click="() => { setTimeout(() => { dropdownOpen = true }, 200) }"
                            @click="() => { dropdownOpen = false }">
                            Dominios
                            <svg class="w-5 h-5 translate-y-0.5" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5">
                                </path>
                            </svg>
                        </a>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                            class="absolute mt-5 py-2 bg-slate-800 shadow-md rounded-xl w-72 transform transition-all duration-300 ease-out"
                            x-transition:enter="translate-y-0" x-transition:enter-start="-translate-y-8"
                            x-transition:enter-end="translate-y-0" x-transition:leave="translate-y-0"
                            x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-8">
                            <p href="#"
                                class="px-4 pt-2 pb-2 flex items-center text-xs hover:text-white text-gray-400 font-semibold transition-colors duration-300">
                                Registra o transfiere tus dominios
                            </p>
                            <a href="#"
                                class="block px-4 pt-2 pb-2 text-sm font-semibold text-white hover:bg-slate-700">
                                Registro de dominios
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-semibold text-white  hover:bg-slate-700">
                                Transferencia de dominios
                            </a>
                        </div>
                    </div>
                </div>

                <div x-data="{ dropdownOpen: false }">
                    <div class="relative px-2 py-2">
                        <a href="#"
                            class="flex items-center hover:text-gray-500 text-black font-semibold transition-colors duration-300"
                            @click="() => { setTimeout(() => { dropdownOpen = true }, 200) }"
                            @click="() => { dropdownOpen = false }">
                            Servidores
                            <svg class="w-5 h-5 translate-y-0.5" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5">
                                </path>
                            </svg>
                        </a>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                            class="absolute mt-5 py-2 bg-slate-800 shadow-md rounded-xl w-72 transform transition-all duration-300 ease-out"
                            x-transition:enter="translate-y-0" x-transition:enter-start="-translate-y-8"
                            x-transition:enter-end="translate-y-0" x-transition:leave="translate-y-0"
                            x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-8">
                            <p href="#"
                                class="px-4 pt-2 pb-2 flex items-center text-xs hover:text-white text-gray-400 font-semibold transition-colors duration-300">
                                Alquila según tus necesidades
                            </p>
                            <a href="#"
                                class="block px-4 pt-2 pb-2 text-sm font-semibold text-white hover:bg-slate-700">
                                alquiler de servidores
                            </a>
                            <a href="#"
                                class="flex items-center justify-between px-4 py-2 text-sm font-semibold text-white  hover:bg-slate-700">
                                <p>Servidores para videojuegos</p>
                                <p
                                    class=" bg-green-500/50 border border-green-500 text-xs font-semibold text-green-300 px-[5px] py-[1px]">
                                    new</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div x-data="{ dropdownOpen: false }">
                    <div class="relative px-2 py-2">
                        <a href="#"
                            class="flex items-center hover:text-gray-500 text-black font-semibold transition-colors duration-300"
                            @click="() => { setTimeout(() => { dropdownOpen = true }, 200) }"
                            @click="() => { dropdownOpen = false }">
                            Nosotros
                            <svg class="w-5 h-5 translate-y-0.5" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5">
                                </path>
                            </svg>
                        </a>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                            class="absolute mt-5 py-2 bg-slate-800 shadow-md rounded-xl w-72 transform transition-all duration-300 ease-out"
                            x-transition:enter="translate-y-0" x-transition:enter-start="-translate-y-8"
                            x-transition:enter-end="translate-y-0" x-transition:leave="translate-y-0"
                            x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-8">
                            <p href="#"
                                class="px-4 pt-2 pb-2 flex items-center text-xs hover:text-white text-gray-400 font-semibold transition-colors duration-300">
                                ¿Tienes problemas? Contactanos
                            </p>
                            <a href="#"
                                class="block px-4 pt-2 pb-2 text-sm font-semibold text-white hover:bg-slate-700">
                                Soporte técnico
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-semibold text-white  hover:bg-slate-700">
                                Nosotros
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-semibold text-white hover:bg-slate-700">
                                FAQ
                            </a>
                            <a href="#"
                                class="block px-4 pt-2 pb-2 text-sm font-semibold text-white hover:bg-slate-700">
                                Contacto
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#"
                    class="px-2 py-2 hover:text-gray-500 text-black font-semibold transition-colors duration-300"
                    @mouseenter="() => { setTimeout(() => { hover = true }, 200) }"
                    @mouseleave="() => { hover = false }">
                    Más Servicios
                </a>
            </nav>
        </div>
    </header>

</section>
