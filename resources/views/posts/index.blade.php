<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les posts du blog</title>
</head>
<body>
<h1>Les posts</h1>
<ul>
    @foreach($posts as $post)
        <li>
            <div><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></div>
            <div>
                <ul>
                    @foreach($post->comments as $comment)
                        <li>{{ $comment->id }}</li>
                    @endforeach
                </ul>
            </div>
        </li>
    @endforeach
</ul>
</body>
</html>
