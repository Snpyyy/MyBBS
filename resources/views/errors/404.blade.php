@extends('layouts.layout')

@section('title', '一覧表示画面')

@section('content')
    <div class="container">
        <div class="text-center">
            <h2 class="my-5">お探しのページは見つかりませんでした</h2>
            <a href="{{ route('index') }}" class="btn btn-primary">一覧画面へ戻る</a>
        </div>
    </div>
@endsection
