@extends ('layout')

@section ('content')
<div class="col-md-10 overflow-scroll">
    <h1 class="mt-0">All users:</h1>
    
    <ul>
            @foreach ($users as $user)
            
                <li scope="row"><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></li>
            
            @endforeach
    </ul>
</div>
</main>

@endsection