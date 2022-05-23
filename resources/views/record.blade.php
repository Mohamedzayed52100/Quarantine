<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Record  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card">
        <div class="card-header">
            record readings</div>
        <div class="card-body">

            <form action="/recordinfo" method="POST" enctype="multipart/form-data">
                @csrf
             {{-- </div> --}}
            {{-- {{asset('image')}}/{{$d->profileimage   }} --}}
                <div class="form-group">
                   <label for="title">MRI </label>
                  <input type="number"  name="mri" value="" class="form-control">
                </div>
                <div class="form-group">
                     <label for="temperature">temperature</label>
                    <input type="text"  name="temperature"   class="form-control">
                  </div>
                <div class="form-group">
                     <label for="oxygen">Oxygen Level</label>
                    <input type="text"  name="oxygen"   class="form-control">
                  </div>
                <div class="form-group">
                  {{-- <label for="title">Choose profil Image</label> --}}
                  {{-- <input type="file"  name="file" class="form-control"  onchange="previewFile(this)"> --}}

                <button type="submit" class="btn btn-success">Check</button>
                <a href="/notes" class="btn btn-success">Notes</a>
                @if (Session::has('state'))
                <p>{{Session::get('state')}}</p>

                @endif
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
