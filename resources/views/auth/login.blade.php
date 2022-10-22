<x-auth-layout>
    <div class="bg-white shadow-lg rounded-lg mt-9">
        <header class="text-center px-5 pb-5">
            <div class="inline-flex -mt-9 w-[72px] h-[72px] bg-white rounded-full border-4 border-white box-content shadow mb-3">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-1"> Login </h3>
            <div class="text-sm font-medium text-gray-500"></div>
        </header>
        <div class="bg-gray-100 px-5 py-6">
            <div class="text-sm mb-6 text-center ">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                {{-- <x-alert-validation-errors class="mb-4" :errors="$errors" />
                <x-alert-success /> --}}
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                 <!-- Account ID -->
                 <div>
                    <x-label for="account_id" :value="__('Account ID')" />

                    <x-input id="account_id" class="block mt-1 w-full" type="text" name="account_id" :value="old('account_id')"
                        required autofocus />
                </div>

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>

        </div>
    </div>
</x-auth-layout>
