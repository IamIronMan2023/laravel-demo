@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Employee List</h1>

    @if (Auth::user())
    <a href="{{route('employees.create')}}">Create New Employee</a>
    @endif


    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Action</th>
        </tr>

        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee -> first_name }}</td>
            <td>{{ $employee -> last_name}}</td>
            <td> {{ $employee -> email }}</td>
            <td>{{ $employee -> age}}</td>
            <td><a href="{{route('employees.show', ['employee' => $employee -> id])}}">View</a></td>
        </tr>
        @endforeach
    </table>
    {{ $employees->links() }}
</div>

@endsection