<div class="chat">
        <div class="profile">
            <div class="profile-left">
                <div class="icon">
                    @if ($acount->image !=='')
                        <img src="{{ \Storage::url($acount->image) }}" width="25%">
                    @endif
                </div>
            </div>
            <div class="profile-right">
                <div class="name">
                    {{ $acount->name }}
                </div>
                <div>
                    投稿{{ $count }}件
                </div>
            </div>
        </div>
    <div class="private_chat">
        @foreach ($tests as $item)
            <div class="private_chat_flex">
                <div class="chat_icon">
                    @if ($acount->image !=='')
                        <img src="{{ \Storage::url($acount->image) }}" width="25%">
                    @endif
                </div>
                <div id="chat_message">{{ $item["message"] }}</div>
            </div>
        @endforeach
    </div>
</div>


