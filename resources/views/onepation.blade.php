<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$pation->name}}</h1>
    <h1>{{$pation->id}}</h1>
    <h1>{{$pation->email}}</h1>
    <h1>{{$pation->phone}}</h1>
    <img src="{{ asset('images') }}/{{ $pation->pat_image }}"/>
</body>
</html>
