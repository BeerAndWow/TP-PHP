<?php
$folder = './../TP-PHP/';
include_once $folder.'config.php';
include_once $folder.'function/autoload.php';
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
    <link rel="icon" href="img/favicon.png" />
    <title>Whiskey Me Up</title>
</head>
<body>
            <!--Header-->
    <div class="container-fluid" id="banner">
    <div class="jumbotron"> 
    </div> 
    </div>
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
        <a class="navbar-brand" href="index.php">Whiskey Me Up !</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="page/whisky.php">Whisky</a></li>
            <li><a href="page/cigard.php">Cigards</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="page/register.php">Inscription</a></li>
            <li><a href="#">Connexion</a></li>
            </li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <br>
            <!--Slider-->
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="img/slider/Slider1.jpg" alt="Chania">
        </div>

        <div class="item">
        <img src="img/slider/Slider2.jpg" alt="Flower">
        </div>

        <div class="item">
        <img src="img/slider/Slider3.jpg" alt="Flower">
        </div>

        <div class="item">
        <img src="img/slider/Slider4.jpg" alt="Flower">
        </div>

        <div class="item">
        <img src="img/slider/Slider5.jpg" alt="Flower">
        </div>

        <div class="item">
        <img src="img/slider/Slider6.jpg" alt="Flower">
        </div>

        <div class="item">
        <img src="img/slider/Slider7.jpg" alt="Flower">
        </div>

        <div class="item">
        <img src="img/slider/Slider8.jpg" alt="Flower">
        </div>

        <div class="item">
        <img src="img/slider/Slider9.jpg" alt="Flower">
        </div>
    </div>
    </div>
    </div>
    <br>
    <div class="container">
        <?php
            foreach (getArticles() as $id => $article) {
                if($id == 0){
                    echo "<div class='row'>";
                    echo "<div class='col-md-4'>";
                    echo "<img class='img-responsive thumbnail' src=".$article->picture." >";
                    echo "<h3>".$article->name."</h3>";
                    echo "<p>".$article->price."</p>";
                    echo "</div>";
                }
                elseif ($id == 3 || $id == 6 || $id == 9 || $id == 12) {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-4'>";
                    echo "<img class='img-responsive thumbnail' src=".$article->picture." >";
                    echo "<h3>".$article->name." "."<strong>".$article->price." €</strong>"."</h3>";
                    echo "</div>";
                }
                else{
                    echo "<div class='col-md-4'>";
                    echo "<img class='img-responsive thumbnail' src=".$article->picture." >";
                    echo "<h3>".$article->name." "."<strong>".$article->price." €</strong>"."</h3>";
					echo "</div>";
                }
            }
        ?>
    </div>
<!-- test -->
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>