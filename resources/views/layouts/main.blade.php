<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="images/ico">
    @vite('resources/js/app.js')

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- FontAwesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
        integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='
        crossorigin='anonymous' />
    {{-- CDNS --}}
    @yield('cdns')
</head>

<body class="body-bg">

    {{-- Header --}}
    @include('includes.header')

    {{-- Jumbotron --}}
    @include('includes.jumbotron')

    {{-- Main --}}
    <main>
        @yield('main-content')

    </main>

    {{-- Nav --}}
    @include('includes.nav')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Scripts --}}
    @yield('scripts')
</body>

</html>
