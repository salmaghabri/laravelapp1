<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show blog</title>
</head>
<body>
<x-blog :blog="$blog"></x-blog>
        <p><a href="/blogs">Back</a>
        <a href="{{ url('/blogs/$blog->id/edit') }}">Edit</a> 
        <a href="{{ url('/blogs/$blog->id/edit') }}">Edit</a>
    </p>

</body>
</html>