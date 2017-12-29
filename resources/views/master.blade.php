<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laureen en Wesley gaan trouwen</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
          rel="stylesheet" type="text/css">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>

<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Laureen en Wesley gaan
    trouwen
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item px-lg-4 active">
                <a class="nav-link text-uppercase" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase" href="{{route('gift-list')}}">Cadeaus</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase disabled" href="#">Gastenboek</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase" href="{{route('photobook')}}">Foto album</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase" href="{{route('rsvp-form')}}">Aanwezigheid gasten</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase disabled" href="#">Nuttige informatie</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid content">
    @yield('content')
</div>

<footer class="bg-faded text-center py-4">
    <div class="container">
        <p class="m-0">Copyright &copy; Thomas De Meyer 2017</p>
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(document).ready(function () {
        stickyNavbar('.navbar');
    });
</script>
@yield('scripts')
</body>

</html>
