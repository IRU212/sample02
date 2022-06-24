<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <body>
        @include('header')
        <main>
            @include('acount')
            @include('chat')
            @include('search')
        </main>
    </body>
</html>
