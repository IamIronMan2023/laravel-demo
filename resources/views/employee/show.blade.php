<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Detail</title>
</head>

<body>
    <h1>Employee Detail</h1>
    <h3>First Name: {{$employee -> first_name}}</h3>
    <h3>Last Name: {{$employee -> last_name}}</h3>
    <h3>Age: {{$employee -> age}}</h3>
    <h3>Email: {{$employee -> email}}</h3>

</body>

</html>