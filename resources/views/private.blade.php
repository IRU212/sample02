<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- <link rel="stylesheet" href="{{ asset('./css/scss/private.css') }}"> --}}
    </head>
    @include('head')
    <body>
        @include('header')
        <main>
            <div class="user">
                @foreach ($acounts as $item)
                    <div id="user_name">
                        <a href="{{ route('chat',['eC' => $item->id]) }}">{{ $item->name }}</a>
                    </div>
                @endforeach
            </div>
            @include('privateChat')
            @include('search')
        </main>
    </body>
</html>
