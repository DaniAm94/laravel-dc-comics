<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="images/ico">
    @vite('resources/js/app.js')
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
</body>

</html>
