<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="text-green-700" style="text-align: center; font-size:x-large; font-weight:bold">Iniciar Sesión</h2><br>
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full text-sm text-gray-700" type="email" name="email" :value="old('email')" placeholder="Usuario o correo electrónico" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full text-sm text-gray-700" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span style="color: #1b80d3" class="ml-2 text-sm text-gray-600">{{ __('Recordar contraseña') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-xs text-gray-600 hover:text-gray-900" style="color: #1b80d3" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
                @endif
            </div>
            <div class="flex items-center justify-center mt-4">
                <x-jet-button  class="bg-blue-600 text-white">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            <br><br>

            <div class="flex items-center justify-center mt-4">
                <a class="text-xs text-gray-800">
                    {{ __('Aún no tienes cuenta?') }}
                </a>
            </div>

            <div class="flex items-center justify-center mt-1">
                <a class="underline text-xs text-gray-600 hover:text-gray-900" href="{{ route('register') }}" style="color: #2196f3">
                    {{ __('Crear una cuenta') }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
