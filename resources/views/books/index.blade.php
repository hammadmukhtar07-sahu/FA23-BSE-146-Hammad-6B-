@extends('layout.app')

@section('content')

<div class="container">

<div class="d-flex justify-content-between align-items-center mb-4">

<div>
<h2>Books List</h2>
<p class="text-muted">Manage your library's collection from here.</p>
</div>

<a href="/books/create" class="btn btn-primary">
Add New Book
</a>


</div>

<div class="row">

@forelse($books as $book)

<div class="col-md-3 mb-4">

<div class="card shadow-sm border-0 h-100">

@if($book->image)
<img src="{{ asset('book_images/'.$book->image) }}"
class="card-img-top"
style="height:220px; object-fit:cover;">
@else
<img src="https://via.placeholder.com/300x200"
class="card-img-top"
style="height:220px; object-fit:cover;">
@endif

<div class="card-body">

<div class="d-flex justify-content-between mb-2">

<span class="badge 
@if($book->status=='available') bg-success
@else bg-warning text-dark
@endif">

{{ ucfirst($book->status) }}

</span>

<small class="text-muted">
{{ $book->category }}
</small>

</div>

<h5>{{ $book->title }}</h5>

<p class="text-muted">{{ $book->author }}</p>

<a href="{{ route('books.show',$book->id) }}"
class="btn btn-outline-primary w-100 mb-2">
View Details
</a>

<div class="d-flex gap-2">

<a href="{{ route('books.edit',$book->id) }}"
class="btn btn-outline-secondary w-50">
Edit
</a>

<form action="{{ route('books.destroy',$book->id) }}" method="POST" class="w-50">

@csrf
@method('DELETE')

<button class="btn btn-outline-danger w-100">
Delete
</button>

</form>

</div>

</div>

</div>

</div>

@empty

<div class="col-12">

<div class="alert alert-info text-center">

No books available. Click "Add New Book" to add your first book.

</div>

</div>

@endforelse

</div>

<div class="mt-4 d-flex justify-content-center">

{{ $books->links() }}

</div>

</div>

@endsection