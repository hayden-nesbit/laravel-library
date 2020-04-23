@extends ('layout')

@section ('content')

<div class="col-md-10">
    <h1 class="mt-0">User: {{ $user->name }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td scope="row"><a href="{{ route('books.show', $book) }}">{{ $book->title }}</a></td>
                <td>
                    @foreach ($book->authors as $author)
                {{ $author->name }}
                @endforeach
            </td> 
                <!-- change to id from author_book -->
                <td>{{ $book->excerpt }}</td>
                <td>N/A</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <p class="mt-3"><b>Author:</b> 
        @foreach ($book->authors as $author)
            {{ $author->name }}
        @endforeach
       </p>
    <p class="mt-3"><b>Summary:</b> {{ $book->excerpt }}</p>
    <p class="mt-3"><b>Genre:</b> {{ $book->genre }}</p>
    <p class="mt-3"><b>Page Count:</b> {{ $book->pages }}</p>
  </div>


@endsection