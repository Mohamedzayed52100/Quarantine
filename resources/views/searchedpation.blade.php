<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search </title>
    <style>
        img{
            position: absolute;
            top: 150px;
            right: 150px;
            border-radius:50%;
            width: 450px;
            height: 450px;

        }
        .container{
            margin:150px;
            font-size :25px;

        }
        body{
            /* background-image: url('asd.jpg');
            background-size: cover; */
            background: #eee;
        }


    </style>
</head>
<body>



    <div class="container">
        <p> Patient id :{{$pation->id}}</p>
        <p> Patient name :{{$pation->name}}</p>
        <p> Patient mrn :{{$pation->mri}}</p>
        <p> Patient email :{{$pation->email}}</p>
        <p> Patient diagnosis :{{$pation->diagnosis}}</p>
        <p> patient phone : {{$pation->phone}}</p>
        <img src="{{ asset('images') }}/{{ $pation->pat_image }}"
        alt="">
    </div>








</body>
</html>
