<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('seo')

    {{-- favicons --}}
    
    {{-- styles --}}
    @include('meta.landing.styles')

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/theme-2.min.css') }}"> --}}

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>

        @include('components.landing.navbar')

        <main>
        @yield('content')

        </main
        {{-- footer --}}
        @include('components.landing.footer')


    {{-- scripts --}}
    @include('meta.landing.scripts')
</body>

</html>
