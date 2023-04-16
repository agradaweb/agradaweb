<div class="block lg:hidden">
    <div class="bg-[#070815] text-white justify-between px-10 py-16 gap-10 items-center">
        <div class="pb-10">
            <div class="w-[17rem] h-[17rem] flex items-center justify-center border-4 rounded-full border-green-400 mx-auto">
                <img class="rounded-full w-[15rem] h-[15rem]" src="/frontend/images/header.jpg" alt="">
            </div>
        </div>
        <div class=" text-center">
            <p class="pb-5 text-2xl font-bold">Nosotros somos</p>
            <p class="pb-2 text-5xl font-bold">Agrada<span class="text-green-400">Web</span></p>
            <div class="flex items-center justify-center pb-5">
                <hr class="w-5 border-green-300"><p class="text-2xl font-bold">Agencia de diseño web</p>
            </div>
            <div class="text-xl text-gray-400 pb-16 mx-auto">
                <p class="pb-5">We're an award-winning, forward thinking, boutique digital & creative in Edmonton, Canada.</p>
                <p>Our strategists, designers and coders work with clients from all over the world to build successful</p>
            </div>

            <div class="flex items-center gap-10 justify-center">
                <div class="flex items-center gap-2">
                    <div class="bg-green-400 rounded-lg py-2">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                        </svg>
                    </div>
                    <button
                    class="border-b border-green-400 text-green-400 text-sm font-semibold transition-colors duration-500 ease-in-out hover:text-green-700 hover:border-green-700"
                    x-data="colorAnimation()"
                    x-on:mouseenter="changeColor"
                    x-on:mouseleave="resetColor"
                    :style="'color: ' + textColor + '; border-bottom-color: ' + borderColor + ';'"
                    >
                        CONTACTANOS
                    </button>
                </div>

                <div>
                    <button class=" px-5 py-2 rounded-lg bg-green-400 text-black text-sm font-semibold">VER MÁS</button>
                </div>
            </div>
        </div>

        <script>
            function colorAnimation() {
              return {
                textColor: 'text-green-400',
                borderColor: 'border-green-400',
                changeColor() {
                  this.textColor = 'text-green-700';
                  this.borderColor = 'border-green-700';
                },
                resetColor() {
                  this.textColor = 'text-green-400';
                  this.borderColor = 'border-green-400';
                },
              };
            }
          </script>
    </div>
</div>
