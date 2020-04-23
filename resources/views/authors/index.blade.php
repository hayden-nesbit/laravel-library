@extends ('layout')

@section ('content')
<!-- Begin page content -->
<div class="col-md-10 overflow-scroll">
    <h1 class="mt-0">All authors:</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Bio</th>
                <th>Titles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
            <tr>
                <td scope="row"><a href="{{ route('authors.show', $author) }}">{{ $author->name }}</a></td>
                <td>{{ $author->bio }}</td>
                <td>{{ $author->titles }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
    <p>Back to <a href="#">the default sticky footer</a> minus the navbar.</p> -->
</div>
</main>

@endsection
