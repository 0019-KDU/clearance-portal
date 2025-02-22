@extends('layouts.management') <!-- Assuming you have a layout file -->

@section('title', 'Add Person')

@section('content')
<div class="container">
    <h1>Add Person</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('ranks.store') }}" method="POST">
        @csrf

        <!-- Hidden field for department_id -->
        <input type="hidden" name="department_id" value="{{ $departmentId }}" required>

        <div class="form-group">
            <label for="rank_name">Rank Name</label>
            <input type="text" name="rank_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="person_name">Person's Name</label>
            <input type="text" name="person_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="service_number">Service Number</label> <!-- New service number input -->
            <input type="text" name="service_number" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Person</button>
    </form>
</div>

<!-- Internal CSS -->
<style>
    .container {
    max-width: 600px;
    margin: 40px auto; /* This centers the container horizontally */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centers content vertically */
    align-items: center; /* Aligns content horizontally */
     /* Makes the container take full viewport height */
}

    

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 10px;
        transition: box-shadow 0.3s ease;
    }

    .form-control:focus {
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        border-color: #007bff;
    }

    .btn {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        background-color: #007bff;
        border: none;
    }

    .btn:hover {
        background-color: #0056b3;
        transition: background-color 0.3s ease;
    }

    .alert {
        margin-bottom: 20px;
    }

    /* Success message styling */
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
        border-radius: 8px;
    }

    /* Add some spacing */
    form {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column; /* Stack the form elements vertically */
    gap: 15px; /* Add spacing between form elements */
}

</style>
@endsection
