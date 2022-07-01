<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧表示</title>
</head>
<body>
    @foreach($posts as $post)
    <div>
        <div>
            <p>投稿者: {{ $post->user }}</p>
            <p>投稿日時: {{ $post->updated_at }}</p>
        </div>
        <div>
            <p>本文</p>
            <p>{{ $post->text }}</p>
        </div>
    </div>
    @endforeach
    <div>
        <a href="">投稿する</a>
    </div>
</body>
</html>
