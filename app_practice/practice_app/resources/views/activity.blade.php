<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3>Basic Information:</h3>
<p>Name: {{ $data['name'] }}</p>
<p>
    <br>
    Image: <br>
    <img class:="image" src="{{ asset('image.jpg')}}" alt="image">
    <br>
</p>
<p>Age: {{ $data['age'] }}</p>
<p>Address: {{ $data['address'] }}</p>
<p>Sex: {{ $data['sex'] }}</p>

<p>Contact Information:</p>
<p>Email Address: {{ $data['email'] }}</p>
<p>Phone Number: {{ $data['phoneNumber'] }}</p>

Employment Details:
<p>Employer: {{ $data['employer'] }}</p>
<p>Job Title: {{ $data['jobTitle'] }}</p>
<p>Job Description: {{ $data['jobDescription'] }}</p>



    
</body>
</html>