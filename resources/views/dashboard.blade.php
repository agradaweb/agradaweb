<x-app-layout>
    <x-slot name="header">
       {{ __('Tablero') }}
    </x-slot>
    <section class="pb-10">
        <div class="grid grid-cols-3 gap-10">
            <div class="flex bg-white rounded-2xl px-5 py-5 items-center justify-center">
                <div class="pr-10">
                    <img class="h-20 w-20 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
                <div class=" text-center">
                    <p class="text-xl font-semibold mb-5">¡Bienvenido!</p>
                    <p class="text-sm font-medium rounded-lg text-white hover:text-black bg-slate-800 hover:bg-slate-100 px-7 py-1 mb-2">Mi perfil</p>
                    <p class="text-sm font-medium rounded-lg text-white hover:text-black bg-slate-800 hover:bg-slate-100 px-7 py-1">Solicitudes ausencias</p>
                </div>
            </div>
            <div class="flex col-span-2 bg-white rounded-2xl px-5 py-10 justify-between">
                <div>
                    <p class=" text-4xl font-bold pb-6 flex items-center">
                        <svg class="w-10 h-10 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Tu Tempo
                    </p>
                    <p class=" w-80 text-gray-500 text-sm">
                        Hola {{ Auth::user()->name }}, Ya puedes empezar tu jornada con {{ config('app.name', 'Agradaweb') }}.
                    </p>
                </div>
                <div>
                    <a href="#">
                        <button class=" bg-slate-800 py-2 px-24 text-white hover:bg-slate-100 hover:text-black text-center rounded-lg text-lg font-semibold">
                            Comenzar Jornada
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="grid grid-cols-3 gap-10">
            <div class="bg-white rounded-2xl px-5 py-5 items-center text-center">
                <p class="text-left text-2xl font-bold pb-5">Tus horas trabajadas</p>
                <div x-data="{ open: false, selectedWeek: '' }" class="relative inline-block text-left">
                    <button @click="open = !open" class=" inline-flex justify-center w-full px-4 py-2 text-sm font-medium rounded-lg text-white hover:text-black bg-slate-800 hover:bg-slate-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75">
                        Selecciona una semana
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute z-10 mt-2 w-64 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                        <div x-data="calendarComponent()" x-init="init()" class="w-full p-4">
                            <div class="flex items-center justify-between mb-4">
                                <button @click="changeMonth(-1)" class="bg-gray-200 p-2 rounded-md text-gray-600 hover:bg-gray-300">
                                    &lt;
                                </button>
                                <span x-text="monthYear()" class="text-lg font-semibold"></span>
                                <button @click="changeMonth(1)" class="bg-gray-200 p-2 rounded-md text-gray-600 hover:bg-gray-300">
                                    &gt;
                                </button>
                            </div>
                            <div class="grid grid-cols-7 gap-4">
                                <template x-for="(day, index) in days" :key="index">
                                    <div class="bg-white p-2 text-center rounded-md shadow-md" x-text="getDate(day)"></div>
                                </template>
                            </div>
                        </div>


                    </div>
                </div>
                <div class=" text-5xl font-bold pt-16 pb-10">
                    <p>38h:35m</p>
                </div>
                <div class=" mx-auto w-80">
                    <img src="https://www.zohowebstatic.com/sites/default/files/column-chart.jpg" alt="">
                </div>
            </div>

            <div class="bg-white rounded-2xl px-5 py-5 max-h-[35rem] overflow-y-auto">
                <p class="text-left text-2xl font-bold pb-5">Tu jornada</p>
                <div class="max-h-96 overflow-y-auto over">

                    <div class="flex items-center gap-3">
                        <p class="text-gray-400 text-sm">{{ date('d/m/Y') }}</p>
                        <hr class="text-gray-500 w-full">
                    </div>
                    <div class="flex justify-between pt-3">
                        <div class="flex items-center">
                            <svg class="h-4 mr-3 text-slate-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path>
                            </svg>
                            <p class="text-sm font-semibold text-slate-900">Comienzo jornada</p>
                        </div>
                        <div class="flex items-center">
                            <p class="text-sm font-semibold text-slate-900">08:25</p>
                            <svg class="h-6 ml-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between pt-3">
                        <div class="flex items-center">
                            <svg class="h-4 mr-3 text-slate-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5"></path>
                              </svg>
                            <p class="text-sm font-semibold text-slate-900">Pausa</p>
                        </div>
                        <div class="flex items-center">
                            <p class="text-sm font-semibold text-slate-900">10:25</p>
                            <svg class="h-6 ml-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between pt-3">
                        <div class="flex items-center">
                            <svg class="h-4 mr-3 text-slate-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
                            </svg>
                            <p class="text-sm font-semibold text-slate-900">Fin de Jornada</p>
                        </div>
                        <div class="flex items-center">
                            <p class="text-sm font-semibold text-slate-900">12:25</p>
                            <svg class="h-6 ml-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <p class="text-gray-400 text-sm">{{ date('d/m/Y') }}</p>
                        <hr class="text-gray-500 w-full">
                    </div>
                    <div class="flex justify-between pt-3">
                        <div class="flex items-center">
                            <svg class="h-4 mr-3 text-slate-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path>
                            </svg>
                            <p class="text-sm font-semibold text-slate-900">Comienzo jornada</p>
                        </div>
                        <div class="flex items-center">
                            <p class="text-sm font-semibold text-slate-900">08:25</p>
                            <svg class="h-6 ml-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between pt-3">
                        <div class="flex items-center">
                            <svg class="h-4 mr-3 text-slate-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5"></path>
                              </svg>
                            <p class="text-sm font-semibold text-slate-900">Pausa</p>
                        </div>
                        <div class="flex items-center">
                            <p class="text-sm font-semibold text-slate-900">10:25</p>
                            <svg class="h-6 ml-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between pt-3">
                        <div class="flex items-center">
                            <svg class="h-4 mr-3 text-slate-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
                            </svg>
                            <p class="text-sm font-semibold text-slate-900">Fin de Jornada</p>
                        </div>
                        <div class="flex items-center">
                            <p class="text-sm font-semibold text-slate-900">12:25</p>
                            <svg class="h-6 ml-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>


            <div class=" bg-white rounded-2xl px-5 py-5">
                <div class="flex items-center justify-between pb-10">
                    <p class="text-left text-2xl font-bold">Tus ausencias</p>
                    <button class="flex text-sm font-medium bg-gray-200 rounded-xl px-2 py-1">
                        Solicitar ausencia
                    </button>
                </div>
                <div class="pb-3">
                    <div class="flex justify-between items-center pb-2">
                        <div class="flex items-center">
                            <span class="bg-yellow-200 w-3 h-3 rounded-full mr-1"></span>
                            <p>Ausencia médico</p>
                        </div>
                        <button class="flex bg-yellow-200 rounded-xl px-2 py-1 text-xs text-gray-800">
                            Pendiente
                        </button>
                    </div>
                    <p class="text-xs pb-1 text-gray-400">0 dias 1hora 20 minutos</p>
                    <div class="flex text-xs justify-between w-60 text-gray-400 pb-2">
                        <div>
                            <p>Inicio:</p>
                            <p>01/01/2022 10:02</p>
                        </div>
                        <div>
                            <p>fin:</p>
                            <p>01/01/2022 11:22</p>
                        </div>
                    </div>
                    <hr class="text-gray-300 w-full">
                </div>

                <div class="pb-3">
                    <div class="flex justify-between items-center pb-2">
                        <div class="flex items-center">
                            <span class="bg-red-200 w-3 h-3 rounded-full mr-1"></span>
                            <p>Ausencia médico</p>
                        </div>
                        <button class="flex bg-red-200 rounded-xl px-2 py-1 text-xs text-gray-800">
                            denegada
                        </button>
                    </div>
                    <p class="text-xs pb-1 text-gray-400">0 dias 1hora 20 minutos</p>
                    <div class="flex text-xs justify-between w-60 text-gray-400 pb-2">
                        <div>
                            <p>Inicio:</p>
                            <p>01/01/2022 10:02</p>
                        </div>
                        <div>
                            <p>fin:</p>
                            <p>01/01/2022 11:22</p>
                        </div>
                    </div>
                    <hr class="text-gray-300 w-full">
                </div>

                <div class="pb-3">
                    <div class="flex justify-between items-center pb-2">
                        <div class="flex items-center">
                            <span class="bg-green-200 w-3 h-3 rounded-full mr-1"></span>
                            <p>Ausencia médico</p>
                        </div>
                        <button class="flex bg-green-200 rounded-xl px-2 py-1 text-xs text-gray-800">
                            Aprobada
                        </button>
                    </div>
                    <p class="text-xs pb-1 text-gray-400">0 dias 1hora 20 minutos</p>
                    <div class="flex text-xs justify-between w-60 text-gray-400 pb-2">
                        <div>
                            <p>Inicio:</p>
                            <p>01/01/2022 10:02</p>
                        </div>
                        <div>
                            <p>fin:</p>
                            <p>01/01/2022 11:22</p>
                        </div>
                    </div>
                    <hr class="text-gray-300 w-full">
                </div>
            </div>

        </div>
    </section>
</x-app-layout>
