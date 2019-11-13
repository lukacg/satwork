<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
    <title>@yield("title")</title>
    
</head>

<body>
<div class="container-fluid">

    @include("layouts.menu")

    @yield("content")

</div>
</body>

<div class="footerMain text-center py-3">© 2019 Copyright:
        <a href="https://www.satwork.net/"> Satwork</a>
        <p>Contact information: <a href="mailto:info@satwork.net">info@satwork.net</a>.</p>
</html>