@extends ('layout')

@section ('content')
<div class="col-md-10">        
    <h1 class="display-4">Eastside Library Admin</h1>
        <hr class="my-4">
</div>
</div>

<div class="row">
    <div class="col-md-4 offset-4">
<form method="POST" action="/books">
    @csrf
    
    <h3 class="mb-5">New Book Entry Form</h3>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Genre</label>
    <input type="text" class="form-control" id="genre" name="genre">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Excerpt</label>
    <textarea class="form-control" id="excerpt" name="excerpt" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <div class="p-5">
</div>
</div>
</main>

@endsection