<div class="chat">
    <div>
        @foreach ($tests as $index => $item)
            <div class="chat_icon">
                {{ $item['users'] }}
            </div>
            <div class="display_flex_chat">
                <div id="chat_message">{{ $item['message']}}</div>
                @if ($nice_judgement)
                    <form action="{{ route('unnice',$item['id']) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="ec_id" value="{{ $item['id'] }}">
                        <input type="submit" value="いいね解除">
                    </form>
                @else
                    <form action="{{ route('nice',$item['id']) }}" method="post">
                        @csrf
                        <input type="hidden" name="ec_id" value="{{ $item['id'] }}">
                        <input type="submit" value="いいね">
                    </form>
                @endif
                @dump($nice_judgement)
                {{-- <form action="{{ route('unnice',$item['id']) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="ec_id" value="{{ $item['id'] }}">
                    <input type="submit" value="いいね解除">
                </form>
                <form action="{{ route('nice',$item['id']) }}" method="post">
                    @csrf
                    <input type="hidden" name="ec_id" value="{{ $item['id'] }}">
                    <input type="submit" value="いいね">
                </form> --}}
            </div>
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