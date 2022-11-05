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
                {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

                <!-- Validation Errors -->
                {{-- <x-alert-validation-errors class="mb-4" :errors="$errors" />
                <x-alert-success /> --}}
            </div>
            @livewire('admin-login')
        </div>
    </div>
</x-auth-layout>
