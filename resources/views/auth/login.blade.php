<x-auth-layout>
    <x-slot name="textleft">
        <p class="pt-24 text-orange-600">Controla el</p>
        <p class="text-sky-800">tiempo de tu negocio</p>
    </x-slot>

    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    <x-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <p class="text-2xl font-bold pb-10 text-sky-900">Iniciar sesión</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full h-8" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="nombre@email.com" />
        </div>

        <div class="mt-4">
            <div class="flex items-center gap-20">
                <x-label for="password" value="{{ __('Contraseña') }}" />

                @if (Route::has('password.request'))
                    <a class="underline text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Has olvidado tu contraseña?') }}
                    </a>
                @endif
            </div>
            <x-input id="password" class="block mt-1 w-full h-8" type="password" name="password" required autocomplete="current-password" placeholder="*********" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-center my-2">
            <x-button class="w-full">
                {{ __('Iniciar sesión') }}
            </x-button>
        </div>
        <div class="flex items-center gap-2">
            <hr class=" w-full">
            <p>o</p>
            <hr class=" w-full">
        </div>

        <div class="flex items-center justify-center mt-2">
            <button class="w-full justify-center inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-full font-semibold text-xs text-white tracking-widest hover:bg-blue-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                <svg class="mr-2" fill="#ffffff" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"></path> </g></svg>                {{ __('Inícia sesisón con Facebook') }}
            </button>
        </div>
        <div class="flex text-xs font-semibold text-sky-800 pt-3">
            <p class="pr-2">¿Nuevo en {{ config('app.name', 'Agradaweb') }}:</p>
            <a class="text-orange-500" href="https://backend.test/register">Registrate</a>
        </div>
    </form>
</x-auth-layout>
