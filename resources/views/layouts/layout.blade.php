<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/" href="{{ Vite::asset('resources/img/favicon.ico') }}" alt="LogoDC">
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <main>
        <section class="container">
            @include("partials.header")
        </section>
        <section class="container">
                @yield('content')
        </section>
        <section class="container">
            @include("partials.footer")
        </section>
    </main>
</body>
</html>