<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema ACOMS - @yield('pagTitle')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="p-10 border-b bg-azul-tec">
        @yield('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="py-10 text-stone-500 text-center border-t font-bold text-xl object-contain">
        @yield('footer')
    </footer>
</body>

</html>
