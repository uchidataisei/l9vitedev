@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        <p>{{ $post->body }}</p>
                        <p>作成日時：{{ $post->created_at }}</p>
                        <p>更新日時：{{ $post->updated_at }}</p>
                        <p>いいね数：{{ $post->like_count }}</p>
                        <form method="POST" action="{{ route('posts.like', $post->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">いいね！</button>
                        </form>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">編集する</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                        削除する
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- モーダル -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">本当に削除してもよろしいですか？</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                        <button type="submit" class="btn btn-danger">削除する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
