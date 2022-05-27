
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>


    {{--  --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
    {{--  --}}
    <link rel="stylesheet" href="css/profile.css">
    <style>
        img{
            height:70vh;!important;
            border-radius:90px;
        }
        body{
            background-image: url('newin.jpg');
            background-size: cover;
        }
        .gehad{
            margin:   40px ;
            font-size: 20px;
            background-color:#784cfb;
            color:#fff;
            padding: 5px;
            border-radius: 10px;
 

        }
        .gehad:hover{
                        text-decoration: none;

        }

    </style>

</head>
<body>
    <a  class="gehad" href="/logout">logout</a>


    {{-- <a style="font-size: 15px; padding: 5px; position: fixed; top:15px; left: 15px;" class="btn btn-primary" class="logout" href="/logout">logout</a> --}}
    <div class="header-content">
        <div class="container grid-2">
            <div class="column-1">

                <h1 class="header-title">{{session('user')->name}}</h1>
                <br>
                <p  style="font-size: 45px ;font-weight: bold;">
                    Id :  {{session('user')->id}}
                  </p>
                <p class="text">
                    Diagnosis :  {{session('user')->diagnosis}}
                </p>

                <p class="text">
                  Email :   {{session('user')->email}}
                </p>
                <p class="text">
                   Phone : {{session('user')->phone}}
                </p>
                <p class="text">
                   Doctor name: {{session('doc')->name}}
                 </p>
                <p class="text">
                   Doctor specialist: {{session('doc')->specialist}}
                 </p>
                <p class="text">
                   Doctor details: {{session('doc')->details}}
                 </p>
                 <a href="/buy"   class="btn btn-success">Buy </a>
                <a href="/record"   class="btn btn-success">Write </a>
            </div>

            <div class="column-2 image">
                <img src="{{ asset('images') }}/{{ session('user')->pat_image }}"  alt="can't load image">
            </div>
        </div>
    </div>
    </header>
</body>
</html>
