@extends('layout.app')

@section('content')

<div class="container">

<h2>Add New Member</h2>

<form action="{{ route('members.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="mb-3">
<label>Membership Date</label>
<input type="date" name="membership_date" class="form-control">
</div>

<button class="btn btn-success">
Add Member
</button>

</form>

</div>

@endsection