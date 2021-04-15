<x-guest-layout>
    <x-auth-card>
        <x-slot name="cardHeader">
            <span>Konfirmasi Password</span>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
        <x-slot name="cardFooter">
            Sudah punya akun?
            <a class="underline  text-gray-300 hover:text-gray-100" href="{{ route('login') }}">Masuk</a>
        </x-slot>
    </x-auth-card>
</x-guest-layout>
