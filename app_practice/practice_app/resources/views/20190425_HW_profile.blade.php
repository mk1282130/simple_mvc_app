<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>This is Profile Page</h1>
    
    <h2>Name</h2>
    <p>{{ $data['name'] }}</p>

    <h2>Age</h2>
    <p>{{ $data['age'] }}</p>

    <h2>Address</h2>
    <p>{{ $data['address'] }}</p>

    <h2>Favarite Food</h2>
    <p>{{ $data['favariteFood'] }}</p>

    <h2>Favarite Color</h2>
    <p>{{ $data['favariteColor'] }}</p>

</body>
</html>