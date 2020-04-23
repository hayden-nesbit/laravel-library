@extends ('layout')

@section ('content')
<!-- Begin page content -->
<!-- <main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">{{ $book->title }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Excerpt</th>
                <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <a href="{{ route('books.show', $book) }}"><td scope="row">{{ $book->title }}</td></a>
                <td>{{ $book->author }}</td>
                <td>{{ $book->excerpt }}</td>
                <td>N/A</td>
            </tr>
            @endforeach
        </tbody>
    </table> -->
    <!-- <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
    <p>Back to <a href="#">the default sticky footer</a> minus the navbar.</p> -->
  </div>
</main>

@endsection

