<x-guest-layout>
    <x-auth-card>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    html{
        font-size: 100%;
    }
    </style>
        <x-slot name="logo">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                <figure class="landing-header__logo landing-header__logo--subpage">
                    <p class="landing-header__logo__tekst--subpage landing-header__logo__tekst">Time<span class="u-blue">2</span>Share</p>
                </figure>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Naam')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-label for="username" :value="__('Gebruikersnaam')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Wachtwoord')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Herhaal wachtwoord')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="u-margin underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Al een account?') }}
                </a>

                <button class="u-margin u-button u-button--primary">
                    {{ __('Registreren') }}
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
