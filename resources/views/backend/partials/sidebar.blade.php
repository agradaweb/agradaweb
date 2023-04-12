<div class="fixed h-screen bg-white dark:bg-slate-800 shadow-lg">
    <div class="py-6 px-4 h-full">
        <div class="flex justify-between items-center bg-white dark:bg-slate-800">
            <div>
                <a href="#">
                   <p class="font-bold text-base text-center">Agradaweb</p>
                </a>
            </div>
            <div>
                <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>  
        </div>  
        <div class="mt-10 space-x-10">           
            <div x-data="{ open: null }">
                @foreach ($side_menu as $menuKey => $menu)
                    @if ($menu == 'devider')
                        <hr class="my-2">
                    @elseif (isset($menu['sub_menu']))                       
                        <div class="flex mt-4 py-3 px-2 text-sm font-medium leading-5 capitalize rounded cursor-pointer {{ $second_level_active_index == $menuKey ? 'bg-slate-800 text-white dark:text-slate-300 dark:bg-slate-700' : 'side-menu' }} text-slate-600 dark:text-white hover:text-slate-600 hover:bg-gray-100 dark:hover:bg-gray-700" @click="open ===  {{Str::replace(' ', '-', Str::lower($menu['id']) ) }} ? open = null : open =  {{Str::replace(' ', '-', Str::lower($menu['id']) ) }}">
                            <div class="inline-flex items-center mr-3 capitalize">                                    
                                <svg class="w-[1rem]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $menu['icon'] }}"></path>
                                </svg>                                                      
                            </div>
                            <div class="flex justify-between items-center flex-1">
                                <div class="text-left capitalize">
                                    {{ $menu['title'] }}
                                </div>
                                <div class="ml-3">
                                    <span class="text-left">
                                        <span class="capitalize">
                                            <svg class="w-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path :class="{ 'hidden': open ===  {{Str::replace(' ', '-', Str::lower($menu['id']) ) }}, 'inline-flex': open !==  {{Str::replace(' ', '-', Str::lower($menu['id']) ) }} }" stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                <path :class="{ 'hidden': open !==  {{Str::replace(' ', '-', Str::lower($menu['id']) ) }}, 'inline-flex': open ===  {{Str::replace(' ', '-', Str::lower($menu['id']) ) }} }" stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div x-show="open === {{Str::replace(' ', '-', Str::lower($menu['id']) ) }}" class="text-slate-600" 
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90">
                            @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                            <li class="block px-2 mb-4 mt-4">
                                <a href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}" class="">
                                    <span class="text-sm flex space-x-3 rtl:space-x-reverse items-center transition-all duration-150 text-slate-600 dark:text-slate-300">
                                        <span class="h-2 w-2 rounded-full border border-slate-600 dark:border-slate-300 inline-block flex-none"></span>
                                        <span class="flex-1">{{ $subMenu['title'] }}</span>
                                    </span>
                                </a>
                            </li>                            
                            @endforeach
                        </div>                                    
                    @else
                        <a href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}" class="{{ $first_level_active_index == $menuKey ? 'bg-slate-800 text-white dark:text-slate-300 dark:bg-slate-700' : 'side-menu' }}  flex py-3 px-2 text-sm font-medium leading-5 capitalize rounded cursor-pointer text-slate-600 dark:text-white hover:text-slate-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <span class="inline-flex items-center mr-3 capitalize">
                                <span class="capitalize">
                                    <svg class="w-[1rem]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $menu['icon'] }}"></path>
                                    </svg>
                                </span>
                            </span>
                            <div class="text-left capitalize" >
                            {{ $menu['title'] }}
                            </div>
                        </a>          
                    @endif
                @endforeach  
            </div>     
        </div>
       <div class="flex justify-end items-end">
            <div class="bg-slate-900 mb-10 mt-24 p-4 relative text-center rounded-2xl text-white">
                <img src="https://dashcode.codeshaper.net/assets/rabit-0cfb0342.svg" alt="" class="mx-auto relative -mt-[73px]">
                <div class="max-w-[160px] mx-auto mt-6">
                    <div class="font-sans">Gratis</div>
                    <div class="text-xs font-light">Estás en un periodo de prueba.</div>
                </div>
                <div class="mt-6">
                    <button class="bg-white text-slate-900 w-full text-xs font-semibold rounded-sm p-1">Upgrade</button>
                </div>
            </div>
       </div>
    </div>
</div>