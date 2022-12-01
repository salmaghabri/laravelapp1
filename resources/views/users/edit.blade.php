<x-layout>
<form action="{{route('users.show',$user)}}" method="post">
    @method('put')
    @csrf
        <p><label>Username:<input type="text" name="username" size="30" value="{{ $user['username'] }}"/></label></p>
        <p><label>Age:<input type="number" name="age" cols="32" rows="8" value="{{$user['age']}}"></input ></label></p>
        <p><label>Bio: <textarea name="bio"  cols="30" rows="10">{{$user['bio']}}</textarea></p>
        <p><label>Avatar <input type="text" name="avatar" value="{{$user['avatar'] }}"></p>
        
        <input type="submit" value="Update">



    </form>
</x-layout>