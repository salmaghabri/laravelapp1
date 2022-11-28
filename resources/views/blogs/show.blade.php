<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show blog</title>
</head>
<body>
<p>
            <strong>Title:</strong>
            {{ $blog['title'] }} 
        </p>
        <p>
        <strong>Content:</strong>
        {{$blog['content']}}
        </p>
        <p><a href="/blogs">Back</a></p>
</body>
</html>