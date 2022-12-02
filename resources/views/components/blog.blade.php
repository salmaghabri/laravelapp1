 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $blog['title'] }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">created by <a class="link-info" href="{{route('users.show',$blog->user)}}">{{$blog->user->username}}</a></h6>
    <p class="card-text"> {{$blog['content']}}</p>
  </div>
</div>
