<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Record  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
    /* .a{
        margin-top:100px;


    } */
    body{
        background-image: url('asd.jpg');
        background-size: cover;

    }
</style>
</head>
<body>
  <div  class="container a">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card">
        <div class="card-header">
            record readings</div>
        <div class="card-body">
{{-- <p> your id :  {{session('user')->id}}</p> --}}

@php
$value =session('user')->mri;
@endphp

@if (Session::has('invaild_reange'))
<p style="color:red;">{{Session::get('invaild_reange')}}</p>

@endif
            <form   action="/recordinfo" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                   <label for="title">Name </label>
                  <input  type="hidden"  value="{{$value}}"  readolny name="mri" readonly class="form-control">
                  <input  type="text"  value="{{session('user')->name}}"  readolny name="nameed" readonly class="form-control">


                </div>
                <div class="form-group">
                     <label for="temperature">temperature</label>
                    <input type="text"  name="temperature" value="{{old("temperature")}}" maxlength="2"  class="form-control">
                    @error('temperature')
                    <span>{{$message}}</span>

                    @enderror
                  </div>
                <div class="form-group">
                     <label for="oxygen">Oxygen Level</label>
                    <input type="text"  name="oxygen"  maxlength="3" value="{{old("oxygen")}}"  class="form-control">
                    @error('oxygen')
                    <span>{{$message}}</span>

                    @enderror
                  </div>
                <div class="form-group">
                     <label for="oxygen">respiratory Level</label>
                    <input type="text"  name="respiratory"  maxlength="3" value="{{old("respiratory")}}"  class="form-control">
                    @error('respiratory')
                    <span>{{$message}}</span>

                    @enderror
                  </div>
                <div class="form-group">
                     <label for="oxygen">pluse indicator Level</label>
                    <input type="text"  name="pluse_indicator"  maxlength="3" value="{{old("pluse_indicator")}}"  class="form-control">
                    @error('pluse_indicator')
                    <span>{{$message}}</span>

                    @enderror
                  </div>
                <div class="form-group">
                     <label for="blood_pressure	">blood pressure Level</label>
                    <input type="text"  name="blood_pressure"  maxlength="3" value="{{old("blood_pressure")}}"  class="form-control">
                    @error('blood_pressure')
                    <span>{{$message}}</span>

                    @enderror
                  </div>
                <div class="form-group">
                     <label for="blood_glucose_level">blood glucose level </label>
                    <input type="text"  name="blood_glucose_level"  maxlength="3" value="{{old("blood_glucose_level")}}"  class="form-control">
                    @error('blood_glucose_level')
                    <span>{{$message}}</span>

                    @enderror
                  </div>
                <div class="form-group">
                  {{-- <label for="title">Choose profil Image</label> --}}
                  {{-- <input type="file"  name="file" class="form-control"  onchange="previewFile(this)"> --}}

                <button type="submit" class="btn btn-success">Check</button>
                <a href="/notes" class="btn btn-success">Notes</a>
                @if (Session::has('state'))
                <p style="color: red;">{{Session::get('state')}}</p>

                <p>{{ session('doc_alaa')->name }}</p>
<p>{{ session('doc_alaa')->phone }}</p>
 <img  style="width:250px; height: 250px;" src="{{ asset('image') }}/{{  session('doc_alaa')->doc_image  }}" class="card-img-top" alt="...">
                @endif


                @if (Session::has('submit'))
                <p style="color: red;">{{Session::get('submit')}}</p>
                <img style="width: 160px; height: 160px" src="a1.jpg">
                <img style="width: 160px; height: 160px" src="a2.jpg">
                <img style="width: 160px; height: 160px" src="a3.jpg">

                @endif


                {{-- <h1>{{$merchant}}</h1> --}}
              </form>

        @if (Session::has('notes'))
        <form action="/recordnote" method="post" style="margin-top: 30px ">
            @csrf

            <textarea id="text" name="message" rows="8" cols="65" placeholder="enter text" maxlength="250"></textarea>

            <span style="position: relative; left: 480px" id="count">250</span>
            <input class="btn btn-success" type="submit" value="submit">
        </form>

        @endif

    </div>


    </div>
</div>
</div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script>
  function previewFile(input){
    var file=$('input[type=file]').get(0).files[0];
    if(file){
      var reader = new FileReader();
      reader.onload =function(){
        $('#previewImg').attr('src', reader.result);
      }
      reader.readAsDataURL(file);
    }
  }
</script>
<script src="js/count.js"></script>

 </html>
