<div class="card border-primary mb-3 col" >
  <div class="card-body">
    <h5 class="card-title">{{ $blog->user->username }} wrote</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$blog->timestamp}}</h6>
    <p class="card-text">{{ $blog->title }}</p>
    <a href="{{ route('blogs.show', $blog) }}">Detail</a>
    <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
    <a href="{{ route('blogs.delete', $blog) }}">Delete</a>
  </div>
</div>