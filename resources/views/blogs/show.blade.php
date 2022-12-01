<x-layout >

<body>
<x-blog :blog="$blog"></x-blog>
        <p><a href="/blogs">Back</a>
        <a href="{{ route('blogs.edit', $blog) }}">Edit</a> 
        <!-- <a href="{{ url('/blogs/$blog->id/edit') }}">Edit</a> -->
    </p>
</x-layout>
