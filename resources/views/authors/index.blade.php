@extends ('layout')

@section ('content')
<div class="col-md-10 overflow-scroll">
    <h1 class="mt-0">All authors:</h1>
    
    <ul>
            @foreach ($authors as $author)
            
                <li scope="row"><a href="{{ route('authors.show', $author) }}">{{ $author->name }}</a></li>
            
            @endforeach
    </ul>
</div>
</main>

@endsection
