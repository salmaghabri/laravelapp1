<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog App</title>
    </head>
    <body>
    <h1>New Blog</h1>
    <form action="/blogs" method="post">  
        @csrf 
        <p><label>Title:<input type="text" name="title" size="30"/></label></p>

        <p><label>Content:<textarea name="content" cols="32" rows="8"></textarea></label></p>

        <input type="submit" value="Create Blog">
    </form>
    <p><a href="/blogs">Back</a></p> 
    </body>
</html>