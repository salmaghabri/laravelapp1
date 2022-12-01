<x-layout>
@if (session('notice'))
        <div>
            {{ session('notice') }}
        </div>
    @endif
<table>
        <thead>
        <tr>
            <th>avatar</th>
            <th>username</th>
            <th>age</th>
            <th>bio</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tr>
                <td>  <img src= {{ $user['avatar'] }}> </td>
                <td>{{$user['username']}}</td>
                <td>{{$user['age']}}</td>
                <td>{{$user['bio']}}</td>
                <td><a href="{{route('users.show', $user)}}">detail</a></td>
                <td><a href="{{route('users.edit', $user)}}">edit</a></td>                
            </tr>
        @endforeach
    </table>
    
    
</x-layout>