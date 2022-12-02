<div class="card">
    
    <form action="{{route('blogs.show',$blog)}}" method="post">
        @csrf
    <input type="number" name="blog_id" size="30" value="{{$blog['id']}}" style="display: none;"/>

        <label >Something to add ?</label><textarea name="content"  cols="100" rows="10"></textarea>
        <label >user</label> <select name="user_id" >
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->username}}</option>
            @endforeach
        </select>
        <input type="submit" value="Add comment">
    </form>
</div>