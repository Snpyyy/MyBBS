@extends('layouts.layout')

@section('title', '編集画面')

@section('content')
<div class="container">
    <div class="w-50 mx-auto bg-white p-2 shadow-sm">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('edit', ['id' => $post->id]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <p>投稿者: <span style="font-weight: bold">{{ $post->name }}</span></p>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">本文</label>
                <textarea class="form-control" name="body" id="body">{{ old('body', $post->body) }}</textarea>
            </div>
            <input type="submit" class="form-control bg-primary text-light" value="送信">
        </form>
    </div>
</div>
@endsection
