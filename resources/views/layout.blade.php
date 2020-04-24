<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="/css/sticky-footer-navbar.css" rel="stylesheet" >
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<div id="main-container" class="container">
    <div class="row">
        <div class="col-md-2">
<header>
  <ul class="nav flex-column float-left">
  <li class="nav-item">
    <a class="nav-link active" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/allbooks">All books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/allauthors">All authors</a>
  </li>
  <div>
  <hr />
</div>
<li class="nav-item">
    <a class="nav-link text-muted" href="/allusers">All users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" href="/authors/create">Update Inventory</a>
  </li>
  <div>
</ul>
  
  
</header>
</div>
<body>

@yield ('content')
</div>
</div>

<footer class="footer mt-auto pb-5 pt-0">
  <div class="container text-center">
    <span class="text-muted">Eastside Library  <i class="fas fa-book"></i></span>
  </div>
</footer>
</body>
</html>
