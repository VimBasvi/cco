<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-tahini font-semibold" />
            <x-text-input id="email" class="block mt-1 w-full bg-light-navy border-dark-tahini text-tahini focus:border-tahini focus:ring-tahini" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-tahini" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-tahini font-semibold" />
            <x-text-input id="password" class="block mt-1 w-full bg-light-navy border-dark-tahini text-tahini focus:border-tahini focus:ring-tahini" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-tahini" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-light-navy border-dark-tahini text-tahini shadow-sm focus:ring-tahini" name="remember">
                <span class="ms-2 text-sm text-tahini">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-tahini hover:text-light-navy focus:ring-2 focus:ring-offset-2 focus:ring-tahini" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 bg-dark-tahini text-tahini hover:bg-light-navy">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
