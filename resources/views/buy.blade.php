<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devices</title>
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
    <style>
        .con {
            display: flex;
             !important flex-direction: row;
             !important justify-content: space-between;
             !important
        }

        .col {
            widows: 400px;
             !important
        }
      .card-header  a{
            text-align: center;
            width:100px;
            margin-left:60px
        }

    </style>
</head>

<body>

    <div class="card-header">
        All device

            <a style="" class="btn btn-dark" href="/buy" > All </a>
            <a class="btn btn-primary" href="/by_kind/1" >Kind 1</a>
            <a href="/by_kind/2"class="btn btn-success" >Kind 2</a>
            <a href="/by_kind/3" class="btn btn-info">Kind 3</a>
   
    </div>
    <div class="container overflow-hidden">
    <div class="row gy-5">
      
        @foreach ($device as $key => $device)
          <div  style="margin: 10px 0"  class="col-3">
            <img  style="width:250px; height: 250px;" src="{{ asset('devices') }}/{{ $device->image }}" class="card-img-top" alt="...">
            <h4 style="text-align: center"  class="card-title">{{ $device->name }}</h4>
            <a style="position: relative; left:100px;"  href="/buy_one_device/{{ $device->id }}" class="btn btn-success"> Buy</a>



          </div>




          @endforeach
        </div>
       </div>



</body>

</html>
