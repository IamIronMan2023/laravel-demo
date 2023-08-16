@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create Employee</h1>
    <form action="{{route('employees.store')}}" method="POST">
        @csrf
        <p>
            <label>First Name</label>
            <input type="text" name="first_name">
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name">
        </p>
        <p>
            <label>Email</label>
            <input type="email" name="email">
        </p>
        <p>
            <label>Age</label>
            <input type="number" name="age">
        </p>
        <p>
            <label>Gender</label>
            <select name="gender" required>
                <option disabled value="" selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </p>

        <input class="btn btn-primary" type="submit" value="Save">
        <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel</a>

    </form>

    @if($errors -> any())
    <div class="text-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
    @endif

</div>
@endsection