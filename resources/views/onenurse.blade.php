<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$nurse->name}}</h1>
    <h1>{{$nurse->days_of_work}}</h1>

    <img src="{{ asset('images') }}/{{ $nurse->nur_image }}"/>
</body>
</html>
