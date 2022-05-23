<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Simple Dynamic Clock</title>
    {{-- <link rel="stylesheet" href="zayed.css"></link> --}}
    <style>
        * {
    box-sizing: border-box;
}
    </style>
</head>

<body>

    <div id="div"></div>




    <script >
        window.onload = function() {
    setInterval(function() {
        var now = new Date(),
            hours = now.getHours(),
            minutes = now.getMinutes(),
            seconds = now.getSeconds();
        var mydiv = document.getElementById('div');
        mydiv.innerHTML = hours + ':' + minutes + ':' + seconds;
    }, 500);
}
    </script>
</body>

</html>
