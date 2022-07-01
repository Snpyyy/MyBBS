@extends('layouts.layout')

@section('title', '投稿画面')

@section('content')
<div>
    <h3>投稿機能</h3>
    <div>
        <form action="" method="post">
            @csrf
            <div>
                <label for="name">投稿者</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="body">本文</label>
                <textarea name="body" id="body"></textarea>
            </div>
            <input type="submit" value="投稿">
        </form>
    </div>
</div>
@endsection
