<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />
    <style>
        a {
            margin: 20px 0 0 30px;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            margin: 20px auto;
            width: 1200px;
        }

        .container .colorswitcher {
            list-style-type: none;
            margin-bottom: 20px;
            text-align: center;
        }

        .container .colorswitcher li {
            width: 20px;
            height: 20px;
            cursor: pointer;
            display: inline-block;
            margin-left: 20px;
        }

        .container .colorswitcher li:first-child {
            background-color: #fff;
        }

        .container .colorswitcher li:nth-child(2) {
            background-color: #16a085;
        }

        .container .colorswitcher li:nth-child(3) {
            background-color: #8e44ad;
        }

        .container .colorswitcher li:nth-child(4) {
            background-color: #2c3e50;
        }

        .red {
            background-color: #fff;
        }

        .green {
            background-color: #16a085;
        }

        .purple {
            background-color: #8e44ad;
        }

        .black {
            background-color: #2c3e50 ;
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

    <a class="gehad" href="/logout">logout</a>
    {{-- clock --}}
    <div style="position: fixed; top: 15px; right:15px;" class="btn btn-secondary" id="div"></div>
    {{-- paragrah in 500 ms --}}
    {{-- <p style="    font-size: 20px ;
    text-align: center" id="type"></p> --}}
<p style="text-align: center; font-size:20px;">This is admain page you can do any operation in database</p>


    <div class="container">
        <ul class="colorswitcher">
            <li datacolor="red"></li>
            <li datacolor="green"></li>
            <li datacolor="purple"></li>
            <li datacolor="black"></li>
        </ul>
        <a class="btn btn-primary" href="/alldoctor">Doctors</a>
        <a class="btn btn-secondary" href="/allnurse">Nurses</a>
        <a class="btn btn-dark" href="/allpation">patients</a>
        <a class="btn btn-danger" href="/all_devices">Devices</a>
        <a class="btn btn-warning" href="/payment">payment</a>
        <a class="btn btn-success" href="/note">note</a>
        <a class="btn btn-success" href="/zipFile">download image as zipFile</a>
    </div>

    <x-todolist></x-todolist>

    <script>
        var el = document.querySelectorAll('ul li');
        var classlist = [];

        document.body.classList.add(localStorage.getItem('pageColor'));

        for (var i = 0; i < el.length; i++) {
            classlist.push(el[i].getAttribute('datacolor'));
            el[i].addEventListener("click", function() {
                document.body.classList.remove(...classlist);
                document.body.classList.add(this.getAttribute('datacolor'));
                localStorage.setItem('pageColor', this.getAttribute('datacolor'));



            }, false);

        }
        // clock
        window.onload = function() {
            setInterval(function() {
                var now = new Date(),
                    hours = now.getHours(),
                    minutes = now.getMinutes(),
                    seconds = now.getSeconds();
                var mydiv = document.getElementById('div');
                if(minutes<10){
                    minutes='0'+minutes;;
                }

                mydiv.innerHTML = Math.abs((hours-12)) + ':' + minutes + ':' + seconds;
            }, 500);
        }
        // paragrap with 500 ms
        var mytext = "this is admain page you can do any operation in database";
        var i = 0;

        var mybutton = document.getElementById('button');
        myp = document.getElementById('type');

        var x = setInterval(function() {
            myp.textContent += mytext[i++];

            if (i >= mytext.length)
                clearInterval(x);
        }, 500)
    </script>
</body>

</html>
