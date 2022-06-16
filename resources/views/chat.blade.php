<div class="chat">
    <div>

        @foreach ($tests as $index => $item)
            <div id="chat_message">{{ $item['message']}}</div>
            {{-- <div><button><a href="{{ route('nice',['eC' => $item['id']]) }}">いいね</a></button></div> --}}
        @endforeach

    </div>
    <div>
        <form action="/create" method="post">
            @csrf
            <input type="text" name="message" id="message">
            <input type="submit" value="＋" id="submit"> 
        </form>
    </div>
</div>