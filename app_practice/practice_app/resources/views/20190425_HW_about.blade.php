<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        text-align: center;
    }
</style>
<body>
    
    <br>
    <h1>About {{ $data['name'] }} </h1>

    <h3>Age</h3>
    <p>{{ $data['age'] }}</p>

    <h3>Address</h3>
    <p>{{ $data['address'] }}</p>

    <h3>Favorite Food</h3>
    <p>{{ $data['favoriteFood'] }}</p>

    <h3>Favorite Color</h3>
    <p>{{ $data['favoriteColor'] }}</p>


</body>
</html>