<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header class="w-100 " style="background-color: #2C1708;">
        <nav class="navbar navbar-expand-lg navbar-light   container p-0">
            <a class="navbar-brand" href="#"><img src="{{URL('images/logo.png')}}" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: #fff;"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" style="color:#fff" href="#">Order Management</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" style="color:#fff" href="#">Product Management</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" style="color:#fff" href="#">Slider Management</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>