<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
</head>

<body>
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

        <input type="submit" value="Save">
        <a href="{{url()->previous()}}">Cancel</a>


    </form>

</body>

</html>