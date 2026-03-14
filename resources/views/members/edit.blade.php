@extends('layout.app')

@section('content')

<div class="container">

<h2>Edit Member</h2>

<form action="{{ route('members.update',$member->id) }}" method="POST">

@csrf
@method('PUT')

<input type="text" name="name" value="{{ $member->name }}" class="form-control mb-2">

<input type="email" name="email" value="{{ $member->email }}" class="form-control mb-2">

<input type="text" name="phone" value="{{ $member->phone }}" class="form-control mb-2">

<input type="date" name="membership_date" value="{{ $member->membership_date }}" class="form-control mb-2">

<button class="btn btn-primary">Update</button>

</form>

</div>

@endsection