<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One nurse</title>
    <style>
        img{
            width: 350px;
            height: 350px;
            position: fixed;
            top: 80px;
            right: 150px;
            border-radius:100px;


        }
        h1{
            margin: 150px 0 0 150px

        }

    </style>
</head>
<body>
    <h1> Name : {{$nurse->name}}</h1>
    <h1>Days of work : {{$nurse->days_of_work}}</h1>

    <img src="{{ asset('images') }}/{{ $nurse->nur_image }}"/>
</body>
</html>
