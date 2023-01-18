<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="bg-white">
        <header class="relative">
            <nav aria-label="Top">
                <div class="bg-white">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="border-b border-gray-200">
                            <div class="flex h-16 items-center justify-between">
                                <!-- Logo (lg+) -->
                                <div class="hidden lg:flex lg:flex-1 lg:items-center">
                                    <a href="#"
                                        class="font-bold text-gray-700">
                                        E-Shop
                                    </a>
                                </div>
                                <div class="flex flex-1 items-center justify-end space-x-3">
                                    @auth
                                        <a href="/profile"
                                            class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">
                                            {{ auth()->user()->name }}
                                        </a>
                                        <span>|</span>
                                        <form method="POST"
                                            action="{{ route('logout') }}">
                                            @csrf
                                            <a type="button"
                                                :href="route('logout')"
                                                class="hidden cursor-pointer text-sm font-medium text-gray-700 hover:text-gray-800 lg:block"
                                                onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        @endauth
                                        @guest
                                            <a href="{{ route('login') }}"
                                                class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">
                                                Log in
                                            </a>
                                            <span>|</span>
                                            <a href="{{ route('register') }}"
                                                class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">
                                                Register
                                            </a>
                                        @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div>
            {{ $slot }}
        </div>
    </div>

    @stack('scripts')
    @livewireScripts
</body>

</html>
