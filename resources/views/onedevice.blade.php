<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: #eee;
        }
        .container{
            width :1200px;
            margin: 0 auto;
        }
        p{
            text-align: justify;
            font-size:19px;
        }
    </style>
</head>
<body>

<div class="container">
    <img  style="width:300px; height: 300px;" src="{{ asset('devices') }}/{{ $d->image }}" class="card-img-top" alt="...">
    <h2>name : {{$d->name}}</h2>
    <h3>details : {{$d->details}}</h3>
    <h3>id : {{$d->id}}</h3>
    <h3>price : {{$d->price}}</h3>
    <h3>kind : {{$d->kind}}</h3>


 
    <a hre="https://drive.google.com/file/d/1K-yKkadu7r44SBkvSdmIGpKiu2M5qC21/view">buy</a>
</div>

</body>
</html>
