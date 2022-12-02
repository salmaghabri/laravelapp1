<x-layout >

@if (session('notice'))
        <div class="alert alert-success">
            {{ session('notice') }}
        </div>
@endif
<x-blog :blog="$blog" ></x-blog>

<div class="card-deck">
@foreach($blog->comments as $comment)
<div class="card" >
  <div class="card-body">

  <h5 class="card-title">{{ $comment->user->username }} said </h5>
  <p class="card-text"> {{$comment['content']}}</p>

</div>
</div>
@endforeach
<div class="card" >
    
    <form action="{{route('blogs.show',$blog)}}" method="post">
        @csrf
        <input type="number" name="blog_id" size="30" value="{{$blog['id']}}" style="display: none;"/>
        <div class="from-group">
            
            <label>Wanna say something ?</label><textarea name="content"   class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="from-group">
            <label class="col-sm-2 col-form-label">username</label> <select name="user_id" >
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->username}}</option>
                @endforeach
            </select>
            <small  class="form-text text-muted">Can't find your username? <a href="{{route('users.create')}}">click here</a></small>
        </div>
        <div class="from-group">
            
            <input type="submit" value="Add comment">
        </div>
    </form>
</div>
</div>

</x-layout>
