<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>{{ config('app.name', 'Laravel') }} - @yield('title') </title>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div id="app">
       <div class="text-center">
           <h1> This is our Practice App </h1>

            <p> {{ $data['name'] }} </p>

            <main class="py-4">
                @yield('content')
            </main>

        <br>

            @php
            $records = ['Koki', 'Maki', 'Naoki', 'Kenichi'];
            @endphp

            @if (count($records) === 1)
            <p> I have one record! </p>
            @elseif (count($records) > 1)
            <p> I have multiple records! </p>
            @else
            <p> I don't have any records! </p>
            @endif

        <br>

        @php
        $name = 'Maki'
        @endphp

        @switch($name)
        @case('Maki')
            Maki says...
            @break
        @case('Tarou')
            Tarou says...
            @break
        @default
            Default case...
        @endswitch

        <br><br>

        @php
        $users = ['Aubrey', 'Ryan', 'Hayato', 'Koki', 'Maki', 'Naoki', 'Kenichi'];
        @endphp

        @for ($i = 0; $i < 10; $i++)
        <p> The current value is {{ $i }} </p>
        @endfor

        @foreach ($users as $user)
        <p>This is user {{ $user }}</p>
        @endforeach

        <br><br>

        @switch ( $data['food'] )
        @case('sushi')
            Health and GOOD!
            @break
        @case('french fries')
            Oily but Yummy!
            @break
        @case('salad')
            No comment:D
            @break
        @case('nori')
            Is it food?
            @break
        @default
            Your food is {{ $data['food'] }}
        @endswitch

        <br><br>


        @for ($x = 1; $x <= 4; $x++)
        <p>{{ $x }}</p>
        <p>This is Data {{ $x }}</p>
        @endfor

        </div>
    </div>

</body>
</html>