<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

         <!-- Account ID -->
         <div>
            <x-label for="account_id" :value="__('Account ID')" />

            <x-input id="account_id" class="block w-full mt-1" type="text" name="account_id" :value="old('account_id')"
                required autofocus />
        </div>

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline hover:text-gray-900"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button class="ml-3">
                {{ __('Log in') }}
            </x-button>
        </div>
    </form>
    <x-button class="ml-3" wire:click='showAlert()'>
        {{ __('Log in') }}
    </x-button>
</div>
