<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChekMate - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        {{-- Styles / Scripts --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- FontAwesome --}}
        <script src="https://kit.fontawesome.com/6d2b9cad44.js" crossorigin="anonymous"></script>

        {{-- Livewire -Styles --}}
        @livewireStyles
    </head>
    <body>
        <header class="container mx-auto">
            @include('layouts._partials.navbar')
        </header>

        <main class="container mx-auto">
            @include('layouts._partials.hero')
            @yield('content')
        </main>

        <footer>
            @include('layouts._partials.footer')
        </footer>

        {{-- Livewire - Scripts --}}
        @livewireScripts
    </body>
</html>
