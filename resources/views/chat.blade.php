<div class="chat">
    <div>

        @foreach ($tests as $index => $item)
            <div id="chat_message">{{ $item['message']}}</div>
            <form action="{{ route('unnice',$item['id']) }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="ec_id" value="{{ $item['id'] }}">
                <input type="submit" value="いいね解除">
            </form>
            <form action="{{ route('nice',$item['id']) }}" method="post">
                @csrf
                <input type="hidden" name="ec_id" value="{{ $item['id'] }}">
                <input type="submit" value="いいね">
            </form>
        @endforeach

    </div>
    <div>
        <form action="/create" method="post" class="form_message">
            @csrf
            <input type="text" name="message" id="message">
            <input type="submit" value="＋" id="submit"> 
        </form>
    </div>
</div>