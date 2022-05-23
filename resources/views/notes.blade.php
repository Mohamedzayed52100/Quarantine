<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Textarea Characters With On-Input Event</title>

    <link rel="stylesheet" href="zayed.css"></link>
</head>

<body>

    <form action="/recordnote" method="post">
        @csrf

        <textarea id="text" name="message" rows="8" cols="80" placeholder="enter text" maxlength="250"></textarea>

        <span id="count">250</span>
        <input type="submit" value="submit">
    </form>






    <script src="js/count.js"></script>
</body>

</html>
