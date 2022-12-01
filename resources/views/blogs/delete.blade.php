<x-layout>
<h1>Delete Blog</h1>
        <p>
            <strong>Title:</strong>
            {{ $blog->title }}
        </p>

        <p>
            <strong>Content:</strong>
            {{ $blog->content }}
        </p>
        <form action="{{ url("blogs/$blog->id") }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Delete">
        </form>
        <p><a href="/blogs">Back</a></p>
</x-layout>