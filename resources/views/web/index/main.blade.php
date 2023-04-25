<x-guest-layout>

    <style>

        .bg-transition {
                transition: background-color 0.3s ease-in-out;
            }

        .bg-hover-color {
            background-color: #c8c8c8; /* Puedes cambiar este color al que desees */
        }
        .scale-transition {
            transition: transform 0.3s ease-in-out;
        }

        .ocultar-barra::-webkit-media-controls {
        display: none !important;
        }

        .ocultar-barra::-webkit-media-controls-enclosure {
        display: none !important;
        }

        .ocultar-barra::-webkit-media-controls-panel {
        display: none !important;
        }
    </style>

    <div class="bg-gray-800 text-white">
        <video class=" min-h-0" autoplay muted loop>
            <source src="{{ asset('frontend/images/video12.mp4') }}" type="video/mp4">
            Tu navegador no soporta la etiqueta de video HTML5.
        </video>
    </div>

    <div class="relative isolate bg-white">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
          <defs>
            <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
              <path d="M100 200V.5M.5 .5H200" fill="none" />
            </pattern>
          </defs>
          <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
            <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
          </svg>
          <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
        </svg>

        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
          <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
            <div class="flex">
              <div class="relative flex items-center gap-x-4 rounded-full py-1 px-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                <span class="font-semibold text-indigo-600">We’re hiring</span>
                <span class="h-4 w-px bg-gray-900/10" aria-hidden="true"></span>
                <a href="#" class="flex items-center gap-x-1">
                  <span class="absolute inset-0" aria-hidden="true"></span>
                  See open positions
                  <!-- Heroicon name: mini/chevron-right -->
                  <svg class="-mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
            <h1 class="mt-10 max-w-lg text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">A better way to ship your projects</h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">Esse id magna consectetur fugiat non dolor in ad laboris magna laborum ea consequat. Nisi irure aliquip nisi adipisicing veniam voluptate id. In veniam incididunt ex veniam adipisicing sit.</p>
            <div class="mt-10 flex items-center gap-x-6">
              <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
              <a href="#" class="text-base font-semibold leading-7 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
            </div>
          </div>
          <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
            <svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl">
              <title>App screenshot</title>
              <defs>
                <clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
                  <rect width="316" height="684" rx="36" />
                </clipPath>
              </defs>
              <path fill="#4B5563" d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
              <path fill="#343E4E" d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
              <foreignObject width="316" height="684" transform="translate(24 24)" clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
                <img src="https://tailwindui.com/img/component-images/mobile-app-screenshot.png" alt="" />
              </foreignObject>
            </svg>
          </div>
        </div>
      </div>

      <div class="container px-6 sm:max-w-7xl grid lg:grid-cols-2 grid-cols-1 lg:gap-10 xl:pb-36 pb-14">
        <div>
            <div class="mb-10">
                <p class="xl:text-6xl lg:text-4xl text-2xl font-bold pb-5">SERVICE</p>
                <p class="text-sm font-semibold">デジタル領域の課題に対して、システム開発、マーケティング、データ解析など一気通貫のデ
                     ジタルコンサルティングサービスと、デジタルプロフェッショナルとプロジェクトをマッチングす
                    プラットフォームを展開しています。
                </p>
            </div>

            <div class="mb-10">
                <a class="" href="#">
                    <div class="sm:flex shadow-xl rounded-xl gap-7 sm:pr-5 bg-transition" x-data="{ hover: false }" @mouseover="hover = true" @mouseout="hover = false"  :class="{'bg-white': !hover, 'bg-hover-color': hover}">
                        <div>
                            <img :class="{'w-full h-full rounded-xl scale-transition transform': true, 'scale-95': hover}" src="frontend/images/card.webp" alt="">
                        </div>
                        <div class="py-5 lg:-skew-x-12 lg:-translate-x-16 bg-transition" :class="{'bg-white': !hover, 'bg-hover-color': hover}">
                            <div class="lg:translate-x-10 lg:skew-x-12 px-5 lg:px-0">
                                <p class="xl:text-2xl text-lg font-bold xl:pb-10 pb-5">WEB <br> CREATIVE</p>
                                <p class="text-sm font-light text-gray-400 pb-5">
                                    Webメディアサイト戦略、デザイン、CMS設計、運用体制の構築、アクセス解析、データ分析、インフラ設計など、メディアサイトの制作に必要なサービスを総合的にご支援します。
                                </p>
                                <div class="flex justify-end">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="mb-10">
                <a class="" href="#">
                    <div class="sm:flex shadow-xl rounded-xl sm:gap-7 sm:pr-5 bg-transition" x-data="{ hover: false }" @mouseover="hover = true" @mouseout="hover = false"  :class="{'bg-white': !hover, 'bg-hover-color': hover}">
                        <div>
                            <img :class="{'w-full h-full rounded-xl scale-transition transform': true, 'scale-95': hover}" src="frontend/images/card.webp" alt="">
                        </div>
                        <div class="py-5 lg:-skew-x-12 lg:-translate-x-16 bg-transition" :class="{'bg-white': !hover, 'bg-hover-color': hover}">
                            <div class="lg:translate-x-10 lg:skew-x-12 px-5 lg:px-0">
                                <p class="xl:text-2xl text-lg font-bold xl:pb-10 pb-5">WEB <br> CREATIVE</p>
                                <p class="text-sm font-light text-gray-400 pb-5">
                                    Webメディアサイト戦略、デザイン、CMS設計、運用体制の構築、アクセス解析、データ分析、インフラ設計など、メディアサイトの制作に必要なサービスを総合的にご支援します。
                                </p>
                                <div class="flex justify-end">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div>
            <div class="mb-10">
                <a class="" href="#">
                    <div class="sm:flex shadow-xl rounded-xl gap-7 sm:pr-5 bg-transition" x-data="{ hover: false }" @mouseover="hover = true" @mouseout="hover = false"  :class="{'bg-white': !hover, 'bg-hover-color': hover}">
                        <div>
                            <img :class="{'w-full h-full rounded-xl scale-transition transform': true, 'scale-95': hover}" src="frontend/images/card.webp" alt="">
                        </div>
                        <div class="py-5 lg:-skew-x-12 lg:-translate-x-16 bg-transition" :class="{'bg-white': !hover, 'bg-hover-color': hover}">
                            <div class="lg:translate-x-10 lg:skew-x-12 px-5 lg:px-0">
                                <p class="xl:text-2xl text-lg font-bold xl:pb-10 pb-5">WEB <br> CREATIVE</p>
                                <p class="text-sm font-light text-gray-400 pb-5">
                                    Webメディアサイト戦略、デザイン、CMS設計、運用体制の構築、アクセス解析、データ分析、インフラ設計など、メディアサイトの制作に必要なサービスを総合的にご支援します。
                                </p>
                                <div class="flex justify-end">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="mb-10">
                <a class="" href="#">
                    <div class="sm:flex shadow-xl rounded-xl gap-7 sm:pr-5 bg-transition" x-data="{ hover: false }" @mouseover="hover = true" @mouseout="hover = false"  :class="{'bg-white': !hover, 'bg-hover-color': hover}">
                        <div>
                            <img :class="{'w-full h-full rounded-xl scale-transition transform': true, 'scale-95': hover}" src="frontend/images/card.webp" alt="">
                        </div>
                        <div class="py-5 lg:-skew-x-12 lg:-translate-x-16 bg-transition" :class="{'bg-white': !hover, 'bg-hover-color': hover}">
                            <div class="lg:translate-x-10 lg:skew-x-12 px-5 lg:px-0">
                                <p class="xl:text-2xl text-lg font-bold xl:pb-10 pb-5">WEB <br> CREATIVE</p>
                                <p class="text-sm font-light text-gray-400 pb-5">
                                    Webメディアサイト戦略、デザイン、CMS設計、運用体制の構築、アクセス解析、データ分析、インフラ設計など、メディアサイトの制作に必要なサービスを総合的にご支援します。
                                </p>
                                <div class="flex justify-end">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
      </div>

      <div class="relative bg-gray-900 rounded-tr-[100px] rounded-br-[100px]">
        <div class="absolute bottom-0 h-80 w-full xl:inset-0 xl:h-full">
          <div class="h-full w-full xl:grid xl:grid-cols-2">
            <div class="h-full xl:relative xl:col-start-2">
              <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0 rounded-tr-[100px] rounded-br-[100px]" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
              <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
            </div>
          </div>
        </div>
        <div class="mx-auto max-w-4xl px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-flow-col-dense xl:grid-cols-2 xl:gap-x-8">
          <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
            <h2 class="text-base font-semibold text-indigo-300">Valuable Metrics</h2>
            <p class="mt-3 text-3xl font-bold tracking-tight text-white">Get actionable data that will help grow your business</p>
            <p class="mt-5 text-lg text-gray-300">Rhoncus sagittis risus arcu erat lectus bibendum. Ut in adipiscing quis in viverra tristique sem. Ornare feugiat viverra eleifend fusce orci in quis amet. Sit in et vitae tortor, massa. Dapibus laoreet amet lacus nibh integer quis. Eu vulputate diam sit tellus quis at.</p>
            <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
              <p>
                <span class="block text-2xl font-bold text-white">8K+</span>
                <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Companies</span> use laoreet amet lacus nibh integer quis.</span>
              </p>

              <p>
                <span class="block text-2xl font-bold text-white">25K+</span>
                <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Countries around the globe</span> lacus nibh integer quis.</span>
              </p>

              <p>
                <span class="block text-2xl font-bold text-white">98%</span>
                <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Customer satisfaction</span> laoreet amet lacus nibh integer quis.</span>
              </p>

              <p>
                <span class="block text-2xl font-bold text-white">12M+</span>
                <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Issues resolved</span> lacus nibh integer quis.</span>
              </p>
            </div>
          </div>
        </div>
      </div>

    @include('web.index.partials.hero1')



    <div class="bg-white pb-36">
        <div class="mx-auto max-w-7xl py-12 px-6 lg:py-16 lg:px-8">
          <p class="text-center text-lg font-semibold text-gray-600">Trusted by over 5 very average small businesses</p>
          <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
            <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
              <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Workcation">
            </div>
            <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
              <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
            </div>
            <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
              <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
            </div>
            <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
              <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
            </div>
            <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
              <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
            </div>
            <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
              <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
            </div>
          </div>
        </div>
      </div>
      <section class="container px-6 max-w-7xl  mx-auto">
        <div style="position: relative;" class="px-5 py-5 rounded-lg">

            <div class="xl:pb-20 pb-10">
                <p class="xl:text-4xl lg:text-2xl text-xl font-bold pb-5">
                    Why choose Andersen for Web Portal Development
                </p>
                <p class="xl:text-lg text-sm font-medium pb-2 border-b-2 border-gray-500">
                    Andersen focuses on the most effective way of solving your business problems.
                    The priority of Web Portal Development is the commercial success of the created portals and web applications,
                    and the ways to achieve this are by designing thoughtful and attractive interfaces, fast and reliable operation
                    of the software, as well as resistance to loads combined with high performance.
                </p>
            </div>

            <div class="grid xl:grid-cols-2 grid-cols-1 xl:gap-10">
                <div class="xl:pb-10 pb-5">
                    <p class="text-lg font-semibold">
                        Custom-designed and developed portals
                    </p>
                    <div class="border-t-2 border-gray-500 w-40"></div>
                    <p class="text-sm pt-5 font-normal">
                        Enjoy pure and optimized code and unique and responsive design solutions for your target audience. Andersen's team is fully engaged in your business and creates portals that help your company grow.
                    </p>
                </div>

                <div class="xl:pb-10 pb-5">
                    <p class="text-lg font-semibold">
                        Custom-designed and developed portals
                    </p>
                    <div class="border-t-2 border-gray-500 w-40"></div>
                    <p class="text-sm pt-5 font-normal">
                        Enjoy pure and optimized code and unique and responsive design solutions for your target audience. Andersen's team is fully engaged in your business and creates portals that help your company grow.
                    </p>
                </div>

                <div class="xl:pb-10 pb-5">
                    <p class="text-lg font-semibold">
                        Custom-designed and developed portals
                    </p>
                    <div class="border-t-2 border-gray-500 w-40"></div>
                    <p class="text-sm pt-5 font-normal">
                        Enjoy pure and optimized code and unique and responsive design solutions for your target audience. Andersen's team is fully engaged in your business and creates portals that help your company grow.
                    </p>
                </div>

                <div class="xl:pb-10 pb-5">
                    <p class="text-lg font-semibold">
                        Custom-designed and developed portals
                    </p>
                    <div class="border-t-2 border-gray-500 w-40"></div>
                    <p class="text-sm pt-5 font-normal">
                        Enjoy pure and optimized code and unique and responsive design solutions for your target audience. Andersen's team is fully engaged in your business and creates portals that help your company grow.
                    </p>
                </div>
            </div>
        </div>
      </section>

</x-guest-layout>


