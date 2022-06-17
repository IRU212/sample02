<div class="search">
    <div>
        <form action="" method="get">
            <div><input type="text" name="keyword" placeholder="アカウント名"></div>
            <div class="submit_search"><input type="submit" value="検索"></div>
        </form>
    </div>
    <div class="result">
        @foreach ($results as $item)
            <div><a href="{{ route('chat',['eC' => $item->id]) }}">{{ $item->name }}</a></div>
        @endforeach
    </div>
</div>