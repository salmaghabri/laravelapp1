<x-layout>
    @if(session('notice'))
    <div> {{session('notice')}}</div>
    @endif
    <x-user :user="$user"></x-user>
    <p><a href="/users">Back</a>
        <a href="{{ route('users.edit', $user) }}">Edit</a> 
</x-layout>