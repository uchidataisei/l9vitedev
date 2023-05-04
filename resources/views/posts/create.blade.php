<!DOCTYPE html>
<html>
<head>
    <title>新規作成</title>
</head>
<body>
    <h1>新規作成</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" required minlength="3" maxlength="30">
        </div>
        <div>
            <label for="body">本文</label>
            <textarea id="body" name="body" required></textarea>
        </div>
        <button type="submit">作成</button>
    </form>
</body>
</html>
