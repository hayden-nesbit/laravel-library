@extends ('layout')

@section ('content')
<!-- Begin page content -->

<div class="col-md-10">
    <h1 class="mt-0">Author: {{ $author->name }}</h1>
    <p class="mt-3"><b>Bio:</b> {{ $author->bio }}</p>
    <p class="mt-3"><b>Titles by this author:</b></p>
    <ul>
        @foreach ($author->books as $book)
            <li><a href="/books/{{ $book->id }}">{{ $book->title}}</a></li>
        @endforeach
    </ul>
  </div>


@endsection