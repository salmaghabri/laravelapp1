<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Blog App</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">BLOGIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('blogs.index')}}">Blogs</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container">


       {{ $slot }}
</div>
    </body>
</html>