<div class="chat">
    @foreach ($tests as $index => $item)
        <div class="chat_flex">
            <div class="chat_icon">
                @if ($item['image']!=='')
                    <img src="{{ \Storage::url($item['image']) }}" width="25%">
                @endif
            </div>
            <div id="chat_message">{{ $item['message']}}</div>
        </div>
    @endforeach
    <div>
        <form action="/create" method="post" class="form_message">
            @csrf
            <input type="text" name="message" id="message">
            <input type="submit" value="＋" id="submit"> 
        </form>
    </div>
</div>