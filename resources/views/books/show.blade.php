@extends ('layout')

@section ('content')
<!-- Begin page content -->

<div class="col-md-10">
    <h1 class="mt-0">Title: {{ $book->title }}</h1>
    <p class="mt-3"><b>Author:</b> {{ $book->author }}</p>
    <p class="mt-3"><b>Summary:</b> {{ $book->excerpt }}</p>
    <p class="mt-3"><b>Genre:</b> {{ $book->genre }}</p>
    <p class="mt-3"><b>Page Count:</b> {{ $book->pages }}</p>
  </div>


@endsection