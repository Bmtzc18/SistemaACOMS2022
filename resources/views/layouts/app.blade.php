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
        <h2>@yield('pagTitle')</h2>
        @yield('content')
    </main>
    <footer class="text-center p-5 text-xl bg-slate-400 text-gray-200 font-bold shadow md:items-center md:justify-between md:p-6 h-screen mb-auto justify-between">
        @yield('footer')
    </footer>
</body>

</html>
