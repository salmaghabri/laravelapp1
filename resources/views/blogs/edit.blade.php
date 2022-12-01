<x-layout>
        <h1>Editing Blog</h1>
        <form action="{{  route('blogs.show', $blog)  }}" method="post">
            @method('put')
            @csrf
            <p><label>Title:<input type="text" name="title" size="30" value="{{ $blog->title }}"/></label></p>
            
            <p><label>Content:<textarea name="content" cols="32" rows="8">{{ $blog->content }}</textarea></label></p>
            <p><label > added by</label>
            <select name="user_id" >
                @foreach ($users as $user)
                <option value="{{$user['id']}}">{{$user['username']}} </option>
                @endforeach
            </select>
        </p>
            <input type="submit" value="Update">
        </form>
        <p>
            <a href="{{ url('/blogs', $blog->id) }}">Detail</a> 
            <a href="/blogs">Back</a>
        </p>
</x-layout>
  