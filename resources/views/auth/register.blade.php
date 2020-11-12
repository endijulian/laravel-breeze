<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        {{--  <x-auth-validation-errors class="mb-4" :errors="$errors" />  --}}

        <form method="POST" action="{{ route('register') }}" novalidate>
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />

                <x-validation-message name="name"/> 
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" required />
                <x-validation-message name="email"/> 
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                                <x-validation-message name="password"/> 
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
                                <x-validation-message name="password_confirmation"/> 
            </div>
            
            <div class="flex items-center justify-end mt-4">

                @if (Route::has('login'))
                    Already Have Acount, &nbsp;
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-4" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                @endif

                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
