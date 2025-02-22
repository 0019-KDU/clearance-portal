@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Staff Member</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="{{ route('staff.store') }}">
        @csrf

        <div class="form-group">
            <label for="reg_no">Register Number:</label>
            <input type="text" class="form-control" name="reg_no" required>
        </div>

        <div class="form-group">
            <label for="user_name">Username:</label>
            <input type="text" class="form-control" name="user_name" required>
        </div>

        <div class="form-group">
            <label for="service_number">Service Number:</label>
            <input type="text" class="form-control" name="service_number" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Staff</button>
    </form>
</div>
@endsection