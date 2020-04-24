@extends ('layout')

@section ('content')
<div class="col-md-10 overflow-scroll">
    <h1 class="mt-0">All books:</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Excerpt</th>
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
                
                <td>
               
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>

@endsection

