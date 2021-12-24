<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-red-500" /> --}}
                <img src="{{ asset('/img') }}/dlh.png" width="350" height="350">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

        {{-- <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

        <form method="POST" action="{{ route('login') }}" novalidate>
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-auth-notif name="email"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-auth-notif name="password"/>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    {{-- <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span> --}}
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transtition duration-200" name="remember">
                    <span class="ml-2 text-sm text-gray-600 font-semibold">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:text-blue-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

        <div class="flex items-center justify-between">
            <!-- Register Here-->
            {{-- <div class="flex items-center justify-start mt-4">
                @if (Route::has('register'))
                    <span class="ml-2 text-sm text-gray-600 font-semibold"> Don't have account? </span> &nbsp;
                    <a class="underline text-sm text-blue-600 hover:text-blue-900" href="{{ route('register') }}">
                        {{ __('Register Here') }}
                    </a>
                @endif
            </div> --}}
            <!-- Login Button -->
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </div>
        </form>
    </x-auth-card>
</x-guest-layout>
