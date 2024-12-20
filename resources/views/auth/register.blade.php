<x-guest-layout>
    <x-authentication-card class="mb-[126px]">
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        <x-slot name="titulo">
            Registrarse
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" class="text-white" value="{{ __('Nombre') }}" />
                <x-input id="name" class="text-black block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" class="text-white" value="{{ __('Correo Electrónico') }}" />
                <x-input id="email" class="text-black block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" class="text-white" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="text-black block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" class="text-white" value="{{ __('Confirmar Contraseña') }}" />
                <x-input id="password_confirmation" class="text-black block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="flex items-center justify-end text-white hover:text-gray-400" href="{{ route('login') }}">
                    {{ __('¿Ya esta registrado?') }}
                </a>

                <x-button class="ms-4 bg-gray-900 hover:bg-black">
                    {{ __('Registrarme') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
