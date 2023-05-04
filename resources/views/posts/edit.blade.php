@extends('layout')

@section('content')
    <div class="container">
        <h1>記事編集</h1>
        <hr>
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">タイトル<span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required minlength="3" maxlength="30">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">本文<span class="text-danger">*</span></label>
                <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" rows="10" required>{{ old('body', $post->body) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">保存</button>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">キャンセル</a>
        </form>
    </div>
@endsection
