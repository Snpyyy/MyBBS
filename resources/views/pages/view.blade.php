@extends('layouts.layout')

@section('title', '詳細画面')

@section('content')
    <div class="container">
        <div class="w-50 bg-white mx-auto mb-5 p-2 shadow-sm">
            <div class="d-flex">
                <p class="me-3">投稿者: <span style="font-weight: bold">{{ $post->name }}</span></p>
                <p>投稿日時: {{ $post->formatted_date }}</p>
            </div>
            <div>
                <p class="p-1 bg-light">{!! nl2br(e($post->body)) !!}</p>
            </div>
        </div>
        <h3 class="text-center">返信</h3>
        <div class="w-50 bg-white mx-auto mb-5 p-2 shadow-sm">
            @foreach ($replies as $reply)
                <div class="mb-5">
                    <div class="d-flex">
                        <p class="me-3">返信者: <span style="font-weight: bold">{{ $reply->name }}</span></p>
                        <p>返信日: {{ $reply->formatted_date }}</p>
                    </div>
                    <p>{!! nl2br(e($reply->body)) !!}</p>
                </div>
            @endforeach
            <div>
                <h5 class="text-center">返信する</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('reply', ['id' => $post->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">名前</label>
                        <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">本文</label>
                        <textarea name="body" class="form-control" id="body">{{ old('body') }}</textarea>
                    </div>
                    <input type="submit" class="form-control bg-primary text-light" value="返信">
                </form>
            </div>
        </div>
    </div>
@endsection
