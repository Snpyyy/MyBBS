@extends('layouts.layout')

@section('title', '一覧表示画面')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="w-50 bg-white mx-auto mb-5 p-2 shadow-sm">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <p class="me-3">投稿者: <span style="font-weight: bold">{{ $post->name }}</span></p>
                    <p>投稿日時: {{ $post->formatted_date }}</p>
                </div>
                <div>
                    <a href="{{ route('edit', ['id' => $post->id]) }}" class="btn btn-primary">編集</a>
                    <a href="{{ route('delete', ['id' => $post->id]) }}" class="btn btn-danger">削除</a>
                </div>
            </div>
            <div>
                <p class="p-1 bg-light">{!! nl2br(e($post->body)) !!}</p>
            </div>
            <a href="{{ route('view', ['id' => $post->id]) }} ">返信する</a>
        </div>
    @endforeach
    @if ($posts->isEmpty())
        <div class="w-50 mx-auto bg-white shadow-sm p-5 mt-5">
            <h2 class="text-center mb-5">まだ投稿がありません</h2>
            <div class="d-grid gap-2">
                <a href="/create" class="btn btn-primary">投稿する</a>
            </div>
        </div>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>

@endsection
