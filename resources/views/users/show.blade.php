@extends ('layout')

@section ('content')

<div class="col-md-10">
    <h1 class="mt-0">User: {{ $user->name }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($checks as $check)
            <tr>
                <td scope="row"><a href="{{ route('books.show', $check->book) }}">{{ $check->book->title}}</a></td>
                <td>
                    @foreach ($check->book->authors as $author)
                {{ $author->name }}
                @endforeach
                </td>
                <td><a href="/users/{{ $user->id }}/{{ $check->book->id }}" type="button" class="btn btn-outline-danger btn-sm">Return</a></td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection