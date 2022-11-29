<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Delete Blog</h1>
        <p>
            <strong>Title:</strong>
            {{ $blog->title }}
        </p>

        <p>
            <strong>Content:</strong>
            {{ $blog->content }}
        </p>
        <form action="{{ url("blogs/$blog->id") }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Delete">
        </form>
        <p><a href="/blogs">Back</a></p>
</body>
</html>