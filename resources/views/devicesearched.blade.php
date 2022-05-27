<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search device</title>


    <style>
        img{
            position: absolute;
            top: 150px;
            right: 150px;
            border-radius:60px;
            width: 400px;
            height: 400px;

        }
        .container{
            margin:150px;
            font-size :25px;

        }
        body{
            background-image: url('asd.jpg');
            background-size: cover;
        }
        </style>
</head>
<body>
    <div class="container">

    <p>Decice id : {{$device->id}}</p>
    <p>Decice name : {{$device->name}}</p>
    <p>Decice price : {{$device->price}}</p>
    <p>Decice kind : {{$device->kind}}</p>
    <p>Decice details : {{$device->details}}</p>
    <p>Decice amount : {{$device->amount}}</p>

    <img   src="{{ asset('devices') }}/{{ $device->image }}" class="card-img-top" alt="...">
    </div>
</body>
</html>
