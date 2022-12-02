<x-layout>
    @if(session('notice'))
        <div class="alert alert-success">
            {{ session('notice') }}
        </div>
    @endif
    
        
        @foreach($users as $user)
            @if($loop->even)
            <x-ucard :user="$user" ok='false' color=' border-dark card text-white bg-secondary col'></x-ucard>
            @else
            <x-ucard :user="$user" ok='true' color=' border-dark card text-white bg-info col'></x-ucard>

            @endif
            
        @endforeach

  



</x-layout>
