<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
