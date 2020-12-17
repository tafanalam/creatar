<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ URL::to('/asset/favicon.png') }}">
    <title>Creatar | About</title>
  </head>

    <style>
    body {
        background: linear-gradient(-90deg, #643B7A, #4A73AD, #DD4381);
        background-size: 400% 400%;

        -webkit-animation: AnimationName 10s ease infinite;
        -moz-animation: AnimationName 10s ease infinite;
        animation: AnimationName 10s ease infinite;
    }

    nav {
        opacity: 75%;
    }

    nav:hover {
        opacity: 100%;
    }

    .foot {
        position: absolute;
        bottom: 10px;
    }

    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        color: white;
        text-shadow: 1px 1px 5px black;
    }

    .backg {
        object-fit: cover;
        float: right;
        width: 100%;
        height: 100%;
    }

    .yes {
        text-shadow: none;
    }

    .yes:hover {
        margin-left: 5px;
    }

    .foot {
        position: absolute;
        bottom: 20px;
        color: white;
    }


    @-webkit-keyframes AnimationName {
        0%{background-position:11% 0%}
        50%{background-position:90% 100%}
        100%{background-position:11% 0%}
    }
    @-moz-keyframes AnimationName {
        0%{background-position:11% 0%}
        50%{background-position:90% 100%}
        100%{background-position:11% 0%}
    }
    @keyframes AnimationName {
        0%{background-position:11% 0%}
        50%{background-position:90% 100%}
        100%{background-position:11% 0%}
    }

    </style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="/">CREATAR.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
        </li>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
        <li class="nav-item">
            <a class="nav-link" href="/createguitar">Create Your Guitar</a>
        </li>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
        <li class="nav-item active">
            <a class="nav-link" href="/about">About</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>

    <!--ISINYA-->
    <img class="backg" src="{{ URL::to('/asset/background.png') }}">
    <div class="container">
    
        <div class="vertical-center">
        <h1>Creatar</h1><br>
        <h5>Creatar is an online marketplace for new, and costumizable music gear.<br>
        The website was founded in 2020 by BINUS University students.<br><br></h5>
        It has grown into a multimillion-dollar business with more than 10 million monthly visitors and $47 million in funding.<br>
        <h6>The website allows anyone to create their own musical instruments and other related equipment.<br>
        The site has roughly half a million listings of music-related gear.<br>
        To help users determine market values for instruments, Creatar provides a price guide of real-time transactional data.
        </h6>
        </div>

    <h7 class="foot">Copyright &copy; Creatar 2020</h7>
    </div>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>