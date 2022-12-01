 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $blog['title'] }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">created by {{$blog->user->username}}</h6>
    <p class="card-text"> {{$blog['content']}}</p>
    <a href="#" class="card-link">edit</a>
    <a href="#" class="card-link">back</a>
    <a href="{{route(comments.add, $blog )}}" class="card-link">Add comment</a>
  </div>
</div>