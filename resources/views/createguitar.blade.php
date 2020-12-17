<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ URL::to('/asset/favicon.png') }}">
    <title>Creatar | Create Your Own Guitar</title>

  </head>

    <style>
    body {
        background: white;
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
    }

    .guitar {
        position: absolute;
    }

    .imgprop {
        height: 768px;
    }

    </style>

  <body>
  <body onload="logodefault()">
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
        <li class="nav-item active">
            <a class="nav-link" href="/createguitar">Create Your Guitar</a>
        </li>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>

    <!--ISINYA-->
    <div class="container">
    <div class="row"><br><br></div>
        <div class="row">
            <div class="col">
                <div class="guitar">
                    <img class="imgprop" id="fingerboard" src="{{ URL::to('/asset/Strat/fb_rw.png') }}">
                </div>
                <div class="guitar">
                    <img class="imgprop" id="headstock" src="{{ URL::to('/asset/Strat/hs_nat.png') }}">
                </div>
                <div class="guitar">
                    <img class="imgprop" id="pickguard" src="{{ URL::to('/asset/Strat/pg_white.png') }}">
                </div>
                <div class="guitar">
                    <img class="imgprop" src="{{ URL::to('/asset/Strat/strat_acc.png') }}">
                </div>
                <div class="guitar">
                    <img class="imgprop" src="{{ URL::to('/asset/Strat/strat_overlay.png') }}">
                </div>
                <div class="guitar">
                    <img class="imgprop" id="tuningpeg" src="{{ URL::to('/asset/Strat/tp_chrome.png') }}">
                </div>
            </div>
            <div class="col-6">
                <h1>Fender Stratocaster</h1>
                <h3>Headstock</h3>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" onclick="headstocknatural()" name="options" id="option1" autocomplete="off" checked> Natural
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" onclick="headstockblack()" name="options" id="option2" autocomplete="off"> Black
                    </label>
                </div>
                <br><br>
                <h3>Tuning Peg</h3>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" onclick="tuningpegchrome()" name="options" id="option1" autocomplete="off" checked> Chrome
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" onclick="tuningpegblack()" name="options" id="option2" autocomplete="off"> Black
                    </label>
                </div>
                <br><br>
                <h3>Fingerboard</h3>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" onclick="fingerboardrw()"name="options" id="option1" autocomplete="off" checked> Rosewood
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" onclick="fingerboardmaple()" name="options" id="option2" autocomplete="off"> Maple
                    </label>
                </div>
                <br><br>
                <h3>Pickguard</h3>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" onclick="pickguardwhite()"name="options" id="option1" autocomplete="off" checked> White (HSS)
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" onclick="pickguardbronze()"name="options" id="option2" autocomplete="off"> Bronze (SSS)
                    </label>
                </div>
                <br><br>
                <h3>Headstock Logo</h3>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" onclick="logodefault()"name="options" id="option1" autocomplete="off" checked> Default "Fender" Logo
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" onclick="logocustom()"name="options" id="option2" autocomplete="off"> Custom Brand
                        </label>
                    </div><br><br>
                    <div class="mb-3">
                            <input class="form-control" id="logo" aria-describedby="emailHelp">
                    </div>


                <br>
                <h3>Body Finish</h3>
                <form name="form1">   
                    <select id="select_id" onchange="val()">
                    <option value="0">Black (Default)</option>
                    <option value="1">Candy Apple Red</option>
                    <option value="2">Lake Placid Blue</option>
                    <option value="3">Sherwood Green</option>
                    <option value="4">Olympic White</option>
                    </select>
                </form><br>
                <button type="button" onclick="submitfunct()" class="btn btn-primary">Submit</button>
            </div>
            
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

    <script>
    var headstocktype = "Natural";
    var tptype = "Chrome";
    var fbtype = "Rosewood";
    var pgtype = "White";
    var logotype = "Default";
    var logotext = "";
    var bcolor = "0";
    var fincolor = "Black (Default)";
    function headstockblack() {
        document.getElementById("headstock").src = "{{ URL::to('/asset/Strat/hs_black.png') }}";
        headstocktype = "Black";
    }
    function headstocknatural() {
        document.getElementById("headstock").src = "{{ URL::to('/asset/Strat/hs_nat.png') }}";
        headstocktype = "Natural";
    }
    function tuningpegchrome() {
        document.getElementById("tuningpeg").src = "{{ URL::to('/asset/Strat/tp_chrome.png') }}";
        tptype = "Chrome";
    }
    function tuningpegblack() {
        document.getElementById("tuningpeg").src = "{{ URL::to('/asset/Strat/tp_black.png') }}";
        tptype = "Black";
    }
    function fingerboardrw() {
        document.getElementById("fingerboard").src = "{{ URL::to('/asset/Strat/fb_rw.png') }}";
        fbtype = "Rosewood";
    }
    function fingerboardmaple() {
        document.getElementById("fingerboard").src = "{{ URL::to('/asset/Strat/fb_maple.png') }}";
        fbtype = "Maple";
    }
    function pickguardwhite() {
        document.getElementById("pickguard").src = "{{ URL::to('/asset/Strat/pg_white.png') }}";
        pgtype = "White (HSS)";
    }
    function pickguardbronze() {
        document.getElementById("pickguard").src = "{{ URL::to('/asset/Strat/pg_bronze.png') }}";
        pgtype = "Bronze (SSS)";
    }
    function logodefault() {
        document.getElementById("logo").disabled = true;
        logotype = "Default";
    }
    function logocustom() {
        document.getElementById("logo").disabled = false;
        logotype = "Custom";
    }

    function val() {
        bcolor = document.getElementById("select_id").value;
        if (bcolor == "5"){
            fincolor = "Olympic White";
        }
        else if (bcolor == "1"){
            fincolor = "Candy Apple Red";
        }
        else if (bcolor == "2"){
            fincolor = "Lake Placid Blue";
        }
        else if (bcolor == "3"){
            fincolor = "Sherwood Green";
        }
        else{
            fincolor = "Black";
        }
    }
    
    function submitfunct() {
            logotext = document.getElementById("logo").value;
            var tex;
            if (logotype == "Default"){
                tex = "Fender Stratocaster\n\nHeadstock Type: " + headstocktype + "\n" +
                "Tuning Peg Type: " + tptype + "\n" +
                "Fingerboard Type: " + fbtype + "\n" +
                "Pickguard Type: " + pgtype + "\n" +
                "Logo Type: " + logotype + "\n" +
                "Body Finish: " + fincolor + "\n" +
                "Do you confirm?";
            }
            else {
                tex = "Fender Stratocaster\n\nHeadstock Type: " + headstocktype + "\n" +
                "Tuning Peg Type: " + tptype + "\n" +
                "Fingerboard Type: " + fbtype + "\n" +
                "Pickguard Type: " + pgtype + "\n" +
                "Logo Type: " + logotype + "\n" +
                "Logo Text: " + logotext + "\n" +
                "Body Finish: " + fincolor + "\n" +
                "Do you confirm?";
            }
            if (confirm(tex)) {
                window.open("/", "_self");
            } else {

            }
    }

    </script>

  </body>
</html>