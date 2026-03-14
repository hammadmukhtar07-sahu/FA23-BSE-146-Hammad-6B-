<!DOCTYPE html>
<html>
<head>
<title>Library Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container">

<a class="navbar-brand">LibraryAdmin</a>

<ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link" href="/">Dashboard</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/books">Books</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/members">Members</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/borrowed">Borrowed Books</a>
</li>

</ul>

</div>

</nav>

<!-- YAHAN CONTENT SHOW HOGA -->

@yield('content')

</body>
</html>