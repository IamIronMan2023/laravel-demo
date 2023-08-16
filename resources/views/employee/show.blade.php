@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Employee Detail</h1>
    <h3>First Name: {{$employee -> first_name}}</h3>
    <h3>Last Name: {{$employee -> last_name}}</h3>
    <h3>Age: {{$employee -> age}}</h3>
    <h3>Email: {{$employee -> email}}</h3>

    <p><a class="btn btn-primary" href="{{route('employees.index')}}">Back to List</a></p>
    <p><a class="btn btn-primary" href="{{route('employees.edit', ['employee' => $employee->id])}}">Edit</a></p>
    <p><button type="button" class="btn btn-danger" data-bs-toggle="modal"
            data-bs-target="#deleteEmployeeModal">Delete</button></p>

</div>

<div class="modal" tabindex="-1" id="deleteEmployeeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('employees.destroy', $employee->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Delete Employee Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
        </div>
        </form>
    </div>
</div>

@endsection