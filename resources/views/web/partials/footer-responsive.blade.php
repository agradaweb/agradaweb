<div class="block xl:hidden">
    <div x-data="{ open: null, closeAll() { open = null } }" class="flex flex-col gap-4">
        <div x-on:click="open === 1 ? (open = null) : (open = 1)">
            <div class="flex justify-between items-center border-b-[1px]">
                <h3 class="text-lg font-medium">Sobre Nosotros</h3>
                <svg :class="{'rotate-180': open === 1}" class="w-6 h-6 transform transition-transform ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div x-show="open === 1" class="py-5 transition-height ease-in-out duration-300">
                <p class="text-left">
                    En Agradaweb Digital Services, nos enorgullecemos de ser una empresa de desarrollo web a medida y expertos en CMS como WordPress y PrestaShop. 
                    Como agencia de digitalización, nuestro objetivo es llevar tu negocio al siguiente nivel en el entorno digital, ayudándote a destacar en el mundo en línea.
                </p>
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Agencia Digitalizadora" class="w-60 mt-5">
            </div>
        </div>
    
        <div x-on:click="open === 2 ? (open = null) : (open = 2)">
            <div class="flex justify-between items-center border-b-[1px]">
                <h3 class="text-lg font-medium">Diseño web</h3>
                <svg :class="{'rotate-180': open === 2}" class="w-6 h-6 transform transition-transform ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div x-show="open === 2" class="py-4 space-y-5 transition-height ease-in-out duration-300">
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                        <a href="#" class="hvr-underline-from-left">Diseño Tiendas Online</a>
                </div>
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                    <a href="#" class="hvr-underline-from-left">Diseño web Wordpress</a>
                </div>
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                    <a href="#" class="hvr-underline-from-left">Diseño web Prestashop</a>
                </div>
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                    <a href="#" class="hvr-underline-from-left">Diseño web Magento</a>
                </div>
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                    <a href="#" class="hvr-underline-from-left">Diseño web Shopify</a>
                </div>
            </div>
        </div>
    
        <div x-on:click="open === 3 ? (open = null) : (open = 3)">
            <div class="flex justify-between items-center border-b-[1px]">
                <h3 class="text-lg font-medium">Soluciones Digitales</h3>
                <svg :class="{'rotate-180': open === 3}" class="w-6 h-6 transform transition-transform ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div x-show="open === 3" class="py-4 space-y-5 transition-height ease-in-out duration-300">
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                        <a href="#" class="hvr-underline-from-left">Desarrollo web a medida</a>
                </div>
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                    <a href="#" class="hvr-underline-from-left">Webs para comercios</a>
                </div>
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                    <a href="#" class="hvr-underline-from-left">Webs Profesionales</a>
                </div>
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                    <a href="#" class="hvr-underline-from-left">Webs para empresa</a>
                </div>
                <div class="flex">
                    <svg class="w-4 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                    <a href="#" class="hvr-underline-from-left">Diseño web responsive</a>
                </div>
            </div>
        </div>                    
    </div>
</div>