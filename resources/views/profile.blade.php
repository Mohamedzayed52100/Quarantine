
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">

</head>
<body>
    <div class="header-content">
        <div class="container grid-2">
            <div class="column-1">
                <h1 class="header-title">{{$pation->name}}</h1>
                <p class="text">
                    Diagnosis :  {{$pation->diagnosis}}
                </p>
                <p class="text">
                  Id :  {{$pation->id}}
                </p>
                <p class="text">
                  Email :   {{$pation->email}}
                </p>
                <p class="text">
                   Phone : {{$pation->phone}}
                </p>
                <p class="text">
                   Doctor name: {{$doc->name}}
                 </p>
                <p class="text">
                   Doctor specialist: {{$doc->specialist}}
                 </p>
                <p class="text">
                   Doctor details: {{$doc->details}}
                 </p>
                 <a href="/buy" class="btn">Buy </a>
                <a href="/record" class="btn">Write </a>
            </div>

            <div class="column-2 image">
                <img src="{{ asset('images') }}/{{ $pation->pat_image }}"  alt="can't load image">
            </div>
        </div>
    </div>
    </header>
</body>
</html>
