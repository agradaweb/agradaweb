<footer class="bg-black text-white rounded-tl-[100px] p-10 sm:pt-16 sm:pb-5 sm:px-20">
    <div class="flex-grow xl:flex xl:justify-between">
        <div class="w-full xl:w-1/2">
            <p class="text-2xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold text-white text-left sm:text-center xl:text-left">
                Desarrollar soluciones digitales es nuestra fortaleza.
            </p>
            <div class="hidden xl:flex flex-wrap gap-4 justify-center md:justify-start pb-16 pt-10">
                <img class="w-40 md:w-56" src="frontend/images/wordpress.webp" alt="">
                <img class="w-40 md:w-56" src="frontend/images/wordpress.webp" alt="">
                <img class="w-40 md:w-56" src="frontend/images/wordpress.webp" alt="">
                <img class="w-40 md:w-56" src="frontend/images/wordpress.webp" alt="">
            </div>
        </div>
        <div class="text-xl md:text-2xl font-bold my-10 xl:my-0">
            <div class="sm:flex xl:grid sm:space-x-10 xl:space-x-0 justify-center xl:justify-end">              
                <a href="tel:{{ $options['phone']->value }}" class="flex items-center mb-5">
                    <svg class="w-6 md:w-8 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                    </svg>
                    {{ $options['phone']->value }}
                </a>
                <a href="mailto:{{ $options['email']->value }}" class="flex items-center mb-5">
                    <svg class="w-6 md:w-8 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                    </svg>
                    {{ $options['email']->value }}
                </a>
                <div class="hidden xl:flex items-center justify-between border-b font-extralight text-xl border-gray-500 hover:text-gray-400">
                    <a href="#">Pide presupuesto</a>
                    <svg class="h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                    </svg>
                </div>                
            </div>
        </div>
    </div>
    <div class="hidden xl:grid grid-cols-3 justify-between">
        <div>
            <p class="text-xl font-semibold mb-5 uppercase">Agradaweb Digital Services S.L</p>
            <p class="pr-10">
                En Agradaweb Digital Services, nos enorgullecemos de ser una empresa de desarrollo web a medida y expertos en CMS como WordPress y PrestaShop. 
                Como agencia de digitalización, nuestro objetivo es llevar tu negocio al siguiente nivel en el entorno digital, ayudándote a destacar en el mundo en línea.
            </p>
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Agencia Digitalizadora" class="w-60 mt-5">
        </div>

        <div class="space-y-2">
            <p class="text-xl font-semibold mb-5 uppercase ">Diseño web</p>
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

        <div class="space-y-2">
            <p class="text-xl font-semibold mb-5 uppercase ">Soluciones Digitales</p>
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
    
    @include('web.partials.footer-responsive')
    
    <div class="text-center mt-10">
        <p>&copy; {{ date('Y') }} ❤️ {{ $options['business']->value }}. Todos los derechos reservados.</p>
    </div>
</footer>