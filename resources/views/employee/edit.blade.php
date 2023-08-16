@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Employee</h1>
    <form action="{{route('employees.update', $employee -> id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3 col-md-4">
            <label class="form-label">First Name</label>
            <input class="form-control" type="text" name="first_name" value="{{$employee->first_name}}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Last Name</label>
            <input class="form-control" type="text" name="last_name" value="{{$employee->last_name}}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email" value="{{$employee->email}}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Age</label>
            <input class="form-control" type="number" name="age" value="{{$employee->age}}" required>
        </div>
        <div class="mb-3 col-md-4">
            <input class="btn btn-primary" type="submit" value="Update">
            <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel</a>
        </div>
    </form>
    @include('partials.error-list-footer')

</div>
@endsection