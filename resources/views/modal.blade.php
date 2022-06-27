<div class="modal-open">プロフィール編集</div>

<div class="modal-container">
  <div class="modal-body">
    <div class="modal-close">×</div>
    <div class="modal-content">
        <form action="{{ route('setting-update',['eC' => $acount->id]) }}" method="post">
            @csrf
            @method('POST')
            <div class="modal-text">ユーザ名</div>
            <input type="text" name="name">
            <div class="modal-text">メールアドレス</div>
            <input type="text" name="email">
            <input type="submit" value="変更">
        </form>
    </div>
  </div>
</div>