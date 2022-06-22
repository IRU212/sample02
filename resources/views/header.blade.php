<header>
    <div>
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ route('chat',['eC' => $user->id]) }}">{{ $user->name }}</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <div>
        <a href="{{ asset('/') }}">投稿一覧</a>
    </div>
    <div>
        <a href="{{ route('setting',['eC'=> auth()->id()]) }}">設定</a>
    </div>
</header>