<div class="search">
    <div>
        <form action="" method="get">
            <div><input type="text" name="keyword" placeholder="アカウント名"></div>
            <div><input type="submit" value="検索"></div>
        </form>
    </div>
    <div>
        @foreach ($results as $item)
            <div><a href="{{ route('chat',['eC' => $item->id]) }}">{{ $item->name }}</a></div>
        @endforeach
    </div>
</div>