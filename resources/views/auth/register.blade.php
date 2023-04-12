<x-auth-layout>

    <x-slot name="textleft">
        <p class="pt-24 text-orange-600">Toma el</p>
        <p class="text-sky-800"> tiempo de tu negocio</p>
    </x-slot>

    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <div class="pb-10 text-center lg:text-left">
            <p class=" text-2xl font-extrabold text-orange-600">Bienvenido a bordo 👋</p>
            <p class=" text-sm font-extrabold text-sky-800">
                Pruébalo gratis. No necesitas una tarjeta de crédito.
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}" class=" px-5 lg:px-0">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nombre" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="nombre@email.com" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="***********" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirma la contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="***********" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="text-xs text-gray-400 pt-10">
                Al hacer clic en "Registrarse", acepto las Condiciones de servicio {{config('app.name', 'Agradaweb')}} y reconozco sus Política de privacidad.
            </div>
            <div class="flex items-center lg:justify-between text-center">
                <a class="underline text-sm text-orange-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Tienes cuenta?') }}
                </a>

                <x-button class="ml-32">
                    {{ __('Registrarse') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-auth-layout>
