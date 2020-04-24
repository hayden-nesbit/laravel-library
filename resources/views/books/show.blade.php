@extends ('layout')

@section ('content')

<div class="col-md-10">
    <h1 class="mt-0">Title: {{ $book->title }}</h1>
    <p class="mt-3"><b>Author:</b> 
        @foreach ($book->authors as $author)
            {{ $author->name }}
        @endforeach
       </p>
    <p class="mt-3"><b>Summary:</b> {{ $book->excerpt }}</p>
    <p class="mt-3"><b>Genre:</b> {{ $book->genre }}</p>
    <p class="mt-3"><b>Page Count:</b> {{ $book->pages }}</p>
    <br />
    <a href="/books/{{ $book->id }}/edit" type="button" class="btn btn-outline-danger btn-sm">Edit</a>
  </div>
  


@endsection