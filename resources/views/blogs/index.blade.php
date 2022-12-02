<x-layout > 
    <h1>Blogs <a class="btn btn-dark" href="{{ route('blogs.create') }}">New Blog</a></h1>
    @if (session('notice'))
        <div class="alert alert-success">
            {{ session('notice') }}
        </div>
    @endif
 
        @foreach($blogs as $blog)
            <x-blogTableRaw :blog="$blog"></x-blogTableRaw>
        @endforeach
  
    
    <br>
    
</x-layout> 