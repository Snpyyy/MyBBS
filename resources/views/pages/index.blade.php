@extends('layouts.layout')

@section('title', '一覧表示画面')

@section('content')
@foreach($posts as $post)
    <div class="w-50 bg-white mx-auto mb-5 p-2 shadow-sm">
        <div class="d-flex">
            <p class="me-3">投稿者: <span style="font-weight: bold">{{ $post->name }}</span></p>
            <p>投稿日時: {{ $post->formatted_date }}</p>
        </div>
        <div>
            <p class="p-1 bg-light">{!! nl2br(e($post->body)) !!}</p>
        </div>
    </div>
@endforeach
@endsection
