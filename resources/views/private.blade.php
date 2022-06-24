<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- <link rel="stylesheet" href="{{ asset('./css/scss/private.css') }}"> --}}
    </head>
    @include('head')
    <body>
        @include('header')
        <main>
            @include('acount')
            @include('privateChat')
            @include('search')
        </main>
    </body>
</html>
