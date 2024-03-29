<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="text-green-700" style="text-align: center; font-size:x-large; font-weight:bold">Registro</h2><br>

            <div>
                {{-- <x-jet-label for="name" value="{{ __('Name') }}" /> --}}
                {{-- <x-jet-input id="name" class="block mt-1 w-full text-sm text-green-600" type="text" name="role" :value="old('role')" placeholder="Selecione el rol" required autofocus autocomplete="name" /> --}}
                <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full text-sm text-gray-600" name="role" id="role">
                    <option value="" disabled selected hidden>Selecciona la acción</option>
                    <option value="reclutador">Buscar un talento</option>
                    <option value="persona">Ser contratado</option>
                </select>
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="name" value="{{ __('Name') }}" /> --}}
                <x-jet-input id="name" class="block mt-1 w-full text-sm text-gray-600" type="text" name="name" :value="old('name')" placeholder="Nombre completo" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                <x-jet-input id="email" class="block mt-1 w-full text-sm text-gray-600" type="email" name="email" :value="old('email')" placeholder="Correo electrónico" required />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                <x-jet-input id="password" class="block mt-1 w-full text-sm text-gray-600" type="password" name="password" placeholder="Contraseña" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                <x-jet-input id="password_confirmation" class="block mt-1 w-full text-sm text-gray-600" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'._('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'._('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-center mt-4">
                <x-jet-button  class="bg-blue-600 text-white">
                    {{ __('Registrarme') }}
                </x-jet-button>
            </div>

            <div class="flex items-center justify-center mt-4">
                <a class="text-xs text-gray-800">
                    {{ __('Ya estás registrado?') }}
                </a>
            </div>

            <div class="flex items-center justify-center mt-1">
                <a class="underline text-xs text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color: #1682db">
                    {{ __('Inicia sesión') }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
