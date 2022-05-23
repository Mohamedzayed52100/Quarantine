<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctors</title>
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
        a{
            text-align: center;
        }

    </style>
</head>

<body>

    <div class="card-header">
        All Doctors
        <td><a href="adddoctor" class="btn btn-success"> Add Doctor</a></td>

    </div>
    <div class="card-body">
        @if (Session::has('success_delete'))
            <div class="alert alert-success">
                {{ Session::get('success_delete') }}
            </div>
        @endif
    </div>
    <div class="container overflow-hidden">
    <div class="row gy-5">

        @foreach ($d as $key => $dd)
          <div  style="margin: 10px 0"  class="col-3">
            <img  style="width:250px; height: 250px;" src="{{ asset('image') }}/{{ $dd->doc_image }}" class="card-img-top" alt="...">
            <h4 style="text-align: center"  class="card-title">{{ $dd->name }}</h4>
            <a style="position: relative; left:25px;"  href="onedoctor/{{ $dd->id }}" class="btn btn-success"> View</a>
            <a  style="position: relative; left:25px;"  href="/editdoctor/{{ $dd->id }}" class="btn btn-success"> Edit</a>
            <a style="position: relative; left:25px;"  href="deleteDoctor/{{ $dd->id }}" class="btn btn-success"> Delete</a>


          </div>




          @endforeach
        </div>
       </div>

    {{-- <div classs="d-flex flex-row bd-highlight mb-3">


            <div class="p-2 bd-highlight">


                        <div class="card" style="width: 18rem;">

                            <div class="card-body">


                                {{-- <p class="card-text">{{dd->name}}</p> --}}
                            {{-- </div>
                        </div>


            </div>

    </div> --}}

</body>

</html>
