<div class="setting">
    <div class="myacount">マイアカウント</div>
    <div class="profile-setting">
        <div class="profile-left">
            <div class="icon">
                @if ($acount->image !=='')
                    <img src="{{ \Storage::url($acount->image) }}" width="25%">
                @endif
            </div>
        </div>
        <div class="information-setting">
            <div class="acount-font">
                {{ $acount->name }}
            </div>
            <div class="acount-font">
                {{ $acount->email }}
            </div>
        </div>
        <div>
            @include('modal')
        </div>
        <div class="display-flex">
            <div class="logout">
                <a href="{{ asset('/logout') }}">ログアウト</a>
            </div>
        </div>
        <div class="delete">
            <form action="{{ route('setting-destroy',['eC' => $acount->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="アカウント削除">
            </form>
        </div>
    </div>
</div>