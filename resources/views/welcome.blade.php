@extends ('layout')

@section ('content')
<div class="col-md-10">        
    <h1 class="display-4">Eastside Library Admin</h1>
        <hr class="my-4">
</div>
</div>

<div class="row">
    <div class="col-md-4 offset-4">
<form>
    <h3 class="mb-5">New Book Entry Form</h3>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Author</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Excerpt</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <div class="p-5">
</div>
</main>

@endsection