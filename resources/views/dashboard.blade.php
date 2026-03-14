@extends('layout.app')

@section('content')

<div class="container">

<h2 class="mb-2">Welcome to Library Dashboard</h2>
<p class="text-muted mb-4">
Manage your collection, members, and transactions in one place.
</p>

<div class="row">

<!-- TOTAL BOOKS -->

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6 class="text-muted">TOTAL BOOKS</h6>

<h2>{{ $totalBooks }}</h2>

</div>

</div>

</div>

<!-- TOTAL MEMBERS -->

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6 class="text-muted">TOTAL MEMBERS</h6>

<h2>{{ $totalMembers }}</h2>

</div>

</div>

</div>

<!-- BORROWED BOOKS -->

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6 class="text-muted">BORROWED BOOKS</h6>

<h2>{{ $borrowedBooks }}</h2>

</div>

</div>

</div>

<!-- AVAILABLE BOOKS -->

<div class="col-md-3">

<div class="card shadow-sm border-0">

<div class="card-body">

<h6 class="text-muted">AVAILABLE BOOKS</h6>

<h2>{{ $availableBooks }}</h2>

</div>

</div>

</div>

</div>


<!-- RECENT ACTIVITY BOX -->

<div class="card mt-5 border-0 shadow-sm">

<div class="card-body text-center p-5 text-muted">

<h5>Recent Activities</h5>

<p>Recent activities and analytics charts will appear here.</p>

</div>

</div>

</div>

@endsection