<head>
    <link rel="stylesheet" href="./css/scss/welcome.css">
</head>

<div class="login">
    <div class="back-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <div class="input-text-top">メールアドレス</div>

                <x-input id="email" class="input-text" type="email" name="email" :value="old('email')" required autofocus />
            </div>
        
            <!-- Password -->
            <div class="mt-4">
                <div class="input-text-top">パスワード</div>
        
                <input id="password"
                                type="password"
                                name="password"
                                class="input-text"
                                required autocomplete="current-password" />
            </div>
        
            {{-- <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"  name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div> --}}
        
            <div>
                <a href="{{ asset('/register') }}" class="form-link-text">
                    新規登録
                </a>
            </div>
        
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        パスワードを忘れましたか?
                    </a>
                @endif
        
                <x-button class="ml-3">
                    ログイン
                </x-button>
            </div>
        </form>
    </div>
</div>
