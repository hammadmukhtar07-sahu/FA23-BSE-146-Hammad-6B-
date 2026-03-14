@extends('layout.app')

@section('content')

<div class="container">

<div class="text-center mb-4">

<h2>Borrow Book</h2>
<p class="text-muted">
Assign a new title to a registered library member.
</p>

</div>

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card shadow-sm">

<div class="card-body p-4">

<form method="POST" action="{{ route('borrow.store') }}">

@csrf

<div class="mb-3">

<label class="form-label">Select Member</label>

<select name="member_id" class="form-control">

<option value="">Choose a member...</option>

@foreach($members as $member)

<option value="{{ $member->id }}">

{{ $member->name }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label class="form-label">Select Book</label>

<select name="book_id" class="form-control">

<option value="">Choose a book title...</option>

@foreach($books as $book)

<option value="{{ $book->id }}">

{{ $book->title }}

</option>

@endforeach

</select>

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Borrow Date</label>

<input type="date" name="borrow_date" class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Return Date</label>

<input type="date" name="return_date" class="form-control">

</div>

</div>

<div class="mb-3">

<label>Remarks (Optional)</label>

<textarea name="remarks" class="form-control" rows="3"
placeholder="Condition of the book or special instructions..."></textarea>

</div>

<button class="btn btn-warning w-100">

Borrow Book

</button>

</form>

</div>

</div>

</div>

</div>

</div>

@endsection