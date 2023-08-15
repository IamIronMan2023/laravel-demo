@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Employee</h1>
    <form action="{{route('employees.update', $employee -> id)}}" method="POST">
        @method('PUT')
        @csrf
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" value="{{$employee->first_name}}">
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" value="{{$employee->last_name}}">
        </p>
        <p>
            <label>Email</label>
            <input type="email" name="email" value="{{$employee->email}}">
        </p>
        <p>
            <label>Age</label>
            <input type="number" name="age" value="{{$employee->age}}">
        </p>

        <input class="btn btn-primary" type="submit" value="Update">
        <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel</a>


    </form>
</div>
@endsection