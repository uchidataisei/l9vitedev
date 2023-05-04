<!DOCTYPE html>
<html>
<head>
    <title>記事一覧ページ</title>
</head>
<body>
    <h1>記事一覧</h1>
    <a href="{{ route('posts.create') }}">新規作成</a>
    <table>
        <thead>
            <tr>
                <th>タイトル</th>
                <th>作成日時</th>
                <th>更新日時</th>
                <th>いいね数</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>{{ $post->like_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
