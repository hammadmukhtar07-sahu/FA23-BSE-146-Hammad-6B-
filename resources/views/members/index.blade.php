@extends('layout.app')

@section('content')

<div class="container">

<div class="d-flex justify-content-between mb-4">
<h2>Library Members</h2>

<a href="{{ route('members.create') }}" class="btn btn-warning">
+ Add New Member
</a>
</div>

<table class="table table-bordered">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Membership Date</th>
<th>Actions</th>
</tr>
</thead>

<tbody>

@foreach($members as $member)

<tr>

<td>{{ $member->id }}</td>
<td>{{ $member->name }}</td>
<td>{{ $member->email }}</td>
<td>{{ $member->phone }}</td>
<td>{{ $member->membership_date }}</td>

<td>

<a href="{{ route('members.edit',$member->id) }}" class="btn btn-sm btn-primary">
Edit
</a>

<form action="{{ route('members.destroy',$member->id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-sm btn-danger">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection