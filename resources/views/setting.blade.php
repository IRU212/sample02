<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <body>
        @include('header')
        <main>
            <div class="user">
                @foreach ($acount as $item)
                    <div id="user_name">
                        <a href="{{ route('chat',['eC' => $item->id]) }}">{{ $item->name }}</a>
                    </div>
                @endforeach
            </div>
            @include('acountSetting')
            @include('search')
        </main>
    </body>
</html>
