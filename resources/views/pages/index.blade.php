@extends('layouts.layout')

@section('title', '一覧表示画面')

@section('content')
@foreach($posts as $post)
    <div>
        <div>
            <p>投稿者: {{ $post->name }}</p>
            <p>投稿日時: {{ $post->updated_at }}</p>
        </div>
        <div>
            <p>本文</p>
            <p>{{ $post->body }}</p>
        </div>
    </div>
@endforeach
<div>
    <a href="/create">投稿する</a>
</div>
@endsection
