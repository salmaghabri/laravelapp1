@if($ok=='true')
<div class="row">
@endif
<div class="{{$color}}" style="max-width: 25rem;">
        <img class=" card-header card-img-top" src="{{ $user['avatar']}}" alt="avatar">
        <div class="card-body">
            <h5>{{ $user['username'] }}</h5>
            <p class="card-text">{{ $user['bio'] }}</p>
            <a href="{{route('users.show',$user)}}" class="btn btn-dark">profile</a>
            <a href="{{route('users.edit',$user)}}" class="btn btn-dark">edit</a>
        </div>
</div>

@if($ok=='false')
</div> 
@endif