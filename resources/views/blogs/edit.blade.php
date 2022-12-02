<x-layout>
        <h1>Editing Blog</h1>
        <form action="{{  route('blogs.show', $blog)  }}" method="post">
            @method('put')
            @csrf
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Title<input type="text" name="title" size="30" value="{{ $blog->title }}"/></label>
             </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Content<textarea name="content" cols="32" rows="8">{{ $blog->content }}</textarea></label>
            </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label"> added by</label>
            
            <select name="user_id" >
                @foreach ($users as $user)
                <option value="{{$user['id']}}">{{$user['username']}} </option>
                @endforeach
            </select>
        </div>
        
            <input type="submit" value="Update">
       
        </form>
        
            <a href="{{ url('/blogs', $blog->id) }}">Detail</a> 
            <a href="/blogs">Back</a>
        
</x-layout>
  