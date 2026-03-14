@extends('layout.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card shadow-lg border-0">

<div class="card-header bg-dark text-white">
<h4 class="mb-0">📚 Add New Book</h4>
</div>

<div class="card-body">

<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="mb-3">
<label class="form-label">Book Title</label>
<input type="text" name="title" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Author</label>
<input type="text" name="author" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Category</label>

<select name="category" class="form-control" required>
<option value="">Select Category</option>
<option value="Programming">Programming</option>
<option value="Science">Science</option>
<option value="Mathematics">Mathematics</option>
<option value="Database">Database</option>
</select>

</div>

<div class="mb-3">
<label class="form-label">ISBN</label>
<input type="text" name="isbn" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Published Year</label>
<input type="number" name="published_year" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Book Image</label>
<input type="file" name="image" class="form-control">
</div>

<button type="submit" class="btn btn-success">
Add Book
</button>

<a href="/books" class="btn btn-secondary">
Cancel
</a>

</form>

</div>
</div>

</div>
</div>
</div>

@endsection