<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Home</title>
        <style type="text/css">
            body {
                margin: 0px;
            } .main{
                min-height: 600px;
            } p {
                margin: 15px 50px;
                text-align: justify;
                text-indent: 45px;
                font-family: sans-serif;
            }

            /* Gambar */
            img:hover {
                src: url(publik/img/logo.png)
                transform: scale(1.30);
            }
        </style>
    </head>
    <body>
        <div class="header">
            @include('layouts.navbar')
        </div>

        <div class="main">
            @yield('content')
        </div>

        <div class="footer">
            @include('layouts.footer')
        </div>
    </body>
</html>