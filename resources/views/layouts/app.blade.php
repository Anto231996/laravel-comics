<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <header>
        @include('partials.header', ['links' => config("header-links")])
    </header>

    <main>
        @yield('main-content')
    </main>

    <section>
        @include('partials.main-info')
    </section>

    <footer>
        @include('partials.footer', ['dcComicsFooterLinks' => config("dc-comics-footer-links"), 'dcFooterLinks' => config("dc-footer-links")])
    </footer>
</body>
</html>