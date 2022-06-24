<div class="user">
    @foreach ($acounts as $item)
        <div id="user_name">
            <a href="{{ route('chat',['eC' => $item->id]) }}">{{ $item->name }}</a>
        </div>
    @endforeach
</div>