@extends('layouts.layout')

@section('title', '投稿画面')

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
        <form action="/create" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">投稿者</label>
                <input type="text" class="form-control form-control-sm" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">本文</label>
                <textarea class="form-control" name="body" id="body"></textarea>
            </div>
            <input type="submit" class="form-control bg-primary text-light" value="投稿">
        </form>
    </div>
</div>
@endsection
