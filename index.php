<?php
include_once 'config.php';
include_once 'function/autoload.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
    <title>Whiskey Me Up !</title>
</head>
<body>
            <!--NAVBAR-->
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Whiskey Me Up !</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="#">Whisky</a></li>
            <li><a href="#">Cigards</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon compte <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Mon profil</a></li>            
                <li><a href="#">Mes commandes</a></li>
                <li><a href="#">Historique d'achats</a></li>
                <li><a href="#">Liste de souhaits</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Mon panier</a></li>
            </ul>
            </li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
            <!--Header-->
    <div class="container">
    <div class="jumbotron">
        <h1>Whiskey Me Up !</h1> 
        <p>Welcome to Whiskey Me Up ! we are an ancestral family company who make and sell the best whisky and cigard from all around the world</p> 
    </div> 
    </div>
            <!--Slider-->
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="img_chania.jpg" alt="Chania">
        </div>

        <div class="item">
        <img src="img_chania2.jpg" alt="Chania">
        </div>

        <div class="item">
        <img src="img_flower.jpg" alt="Flower">
        </div>

        <div class="item">
        <img src="img_flower2.jpg" alt="Flower">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
        </div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>