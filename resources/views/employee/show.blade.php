@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Employee Detail</h1>
    <h3>First Name: {{$employee -> first_name}}</h3>
    <h3>Last Name: {{$employee -> last_name}}</h3>
    <h3>Age: {{$employee -> age}}</h3>
    <h3>Email: {{$employee -> email}}</h3>

    <p><a class="btn btn-primary" {{route('employees.index')}}">Back to List</a></p>
    <p><a class="btn btn-primary" href="{{route('employees.edit', ['employee' => $employee->id])}}">Edit</a></p>

    <form action="{{route('employees.destroy', $employee->id)}}" method="POST">
        @method('DELETE')
        @csrf

        <input class="btn btn-danger" type="submit" value="Delete">
    </form>
</div>
@endsection