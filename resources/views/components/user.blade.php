<img src="{{$user['avatar']}}" alt="">
<p>
            <strong>Username:</strong>
            {{ $user['username'] }} 
        </p>
        <p>
        <strong>Age:</strong>
        {{$user['age']}}
</p>
        <p>
        <strong>Biographie:</strong>
        {{$user['bio']}}
</p>
<p>
        <strong>Blogs written: </strong>
        @foreach($user->blogs as $blog) 
        <a href="{{route('blogs.show',$blog)}}"> {{$blog->title}}</a>
        @endforeach

        
</p>
<p>
<strong>number of comments:</strong> 
{{count($user->comments)}}

</p>