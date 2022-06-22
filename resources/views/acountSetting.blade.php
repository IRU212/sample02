<div class="setting">
    <div class="myacount">マイアカウント</div>
    <div class="profile-setting">
        <div class="profile-left">
            <div class="icon">
                @if ($acount->image !=='')
                    <img src="{{ \Storage::url($acount->image) }}" width="25%">
                @endif
                {{-- @foreach ($acount as $item)
                    <img src="{{ \Storage::url($item->image) }}" width="25%">
                @endforeach --}}
            </div>
        </div>
        <div class="information-setting">
            {{-- @foreach ($acount as $item)
                <div>
                    {{ $item->name }}
                </div>
                <div>
                    投稿件数
                </div>
                <div>
                    説明文
                </div>
            @endforeach --}}
            <div>
                {{ $acount->name }}
            </div>
            <div>
                投稿件数
            </div>
            <div>
                説明文
            </div>
        </div>
        <div class="logout">
            <a href="{{ asset('/logout') }}">ログアウト</a>
        </div>
    </div>
</div>