<x-layout> 
@if (session('notice'))
        <div>
            {{ session('notice') }}
        </div>
@endif
<h1>New user</h1>


    <form action="/users" method="post">
    @csrf 
        <p><label>Username:<input type="text" name="username" size="30"/></label></p>
        <p><label>Age:<input type="number" name="age" cols="32" rows="8"></input ></label></p>
        <p><label>Bio: <textarea name="bio"  cols="30" rows="10"></textarea></p>
        
        <input type="submit" value="Create User">



    </form>
</x-layout> 