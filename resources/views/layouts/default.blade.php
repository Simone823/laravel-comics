<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- link favicon dc --}}
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>

    <title>@yield('metaTitle')</title>
</head>
<body>

    {{-- Header --}}
    @include('components.header')

    {{-- Main --}}
    <main>
        
        {{-- Comics --}}
        @yield('mainContent')

        {{-- Banner blue --}}
        @include('components.bannerBlue')

    </main>

    {{-- Footer --}}
    @include('components.footer')

    
</body>
</html>