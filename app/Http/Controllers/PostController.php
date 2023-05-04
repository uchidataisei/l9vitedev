<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //トップページ
    public function home()
    {
        return view('index');
    }

    // 記事一覧画面
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    // 記事新規作成画面
    public function create()
    {
        return view('posts.create');
    }

    // 記事新規作成処理
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:30',
            'body' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'like_count' => 0,
        ]);

        return redirect()->route('posts.index');
    }

    // 記事詳細画面
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // いいねボタン処理
    public function like(Post $post)
    {
        $post->like_count++;
        $post->save();

        return redirect()->route('posts.index');
    }

    // 記事編集画面
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // 記事更新処理
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:3|max:30',
            'body' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.show', $post->id);
    }

    // 記事削除処理
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
