<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy device</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        body{
            background-color: #eee;
        }
        .container{
            width :1200px;
            margin: 0 auto;
            margin-top:100px;
        }
        p{
            text-align: justify;
            font-size:19px;
        }
        img{
            position: absolute;
            top: 30px;
            right: 250px;
            width:300px; height: 300px;
            //border:  10px solid black;
            /* border-radius:50% ; */

        }
        body{
            /* background-image: url('newin.jpg');
            background-size: cover; */
            background: #d1e4c8;
        }
    </style>

</head>
<body>

<div class="container">
    <img  style="" src="{{ asset('devices') }}/{{ $d->image }}"  alt="...">
    <h2>name : {{$d->name}}</h2>
    <h3>details : {{$d->details}}</h3>
    <h3>id : {{$d->id}}</h3>
    <h3>price : {{$d->price}}</h3>
    <h3>kind : {{$d->kind}}</h3>
    <h3>Amount : {{$d->amount}}</h3>

 {{--  --}}

 <form action="/buydevice" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="idd" value="{{$d->id}}">
    <div class="form-group">
       <label for="title">Name </label>
      <input type="text"  name="name"  class="form-control">
    </div>

<div class="form-group">
  <label for="amount">Amount </label>
  <input type="number"  name="amount"  class="form-control">
</div>
<div class="form-group">
  <label for="date">Date </label>
  <input type="date"  name="date"  class="form-control">
</div>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
 {{--  --}}
</div>
@if(Session::has('success_buy'))
<div class="alert alert-success">
    {{ Session::get('success_buy') }}
</div>
@endif



</body>

</html>
