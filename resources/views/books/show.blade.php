@extends ('layout')

@section ('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Title: {{ $book->title }}</h1>
    <p class="mt-3"><b>Author:</b> {{ $book->author }}</p>
    <p class="mt-3"><b>Summary:</b> {{ $book->excerpt }}</p>
    <p class="mt-3"><b>Genre:</b></p>
    <p class="mt-3"><b>Page Count:</b> {{ $book->pages }}</p>

    <!-- <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Excerpt</th>
                <th>Availability</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table> -->
    <!-- <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
    <p>Back to <a href="#">the default sticky footer</a> minus the navbar.</p> -->
  </div>
</main>

@endsection