<x-layout>
    <h1>New Blog</h1>
    <form action="/blogs" method="post">  
        @csrf 
        <p><label>Title:<input type="text" name="title" size="30"/></label></p>

        <p><label>Content:<textarea name="content"  class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></label></p>
        <p><label > added by</label>
            <select name="user_id" >
                @foreach( $users as $user)
                <option value="{{$user['id']}}">{{$user['username']}} </option>
                @endforeach
            </select>
        </p>
        <input type="submit" value="Create Blog">
    </form>
    <p><a href="/blogs">Back</a></p> 
</x-layout>    