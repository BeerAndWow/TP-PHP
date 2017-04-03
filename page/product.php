<?php
$folder = './../../TP-PHP/';
include_once $folder.'config.php';
include_once $folder.'function/autoload.php';
$article = getArticle($_GET["article"]);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $folder; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
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
        <a class="navbar-brand" href="<?php echo $folder; ?>index.php">Whiskey Me Up !</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo $folder; ?>page/whisky.php">Whisky</a></li>
            <li><a href="<?php echo $folder; ?>page/cigard.php">Cigards</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $folder; ?>page/register.php">Inscription</a></li>
            <li><a href="#">Connexion</a></li>
            </li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <br>
    <br>
    <div class="container">
        <h2><strong><?php echo $article->name ?></strong></h2>
    </div>
    <br>
    <br>
    <div class="container">
        <?php
            $article = getArticle($_GET["article"]);

            echo "<div class='row'>";
            echo "<div class='col-md-6'>";
            echo "<img class='img-responsive thumbnail' src=".$folder.$article->picture." >";
            echo "</div>";
            echo "<div class='col-md-6'>";
            echo "<h3>".$article->content." "."</h3>";
            echo "<br>"."<h3>"."Pick one for only : "."<strong>".$article->price." €</strong>"."</h3>";
            echo "</div>";

            
        ?>
    </div>

    </div>
    <script src="<?php echo $folder; ?>js/jquery.min.js"></script>
    <script src="<?php echo $folder; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $folder; ?>js/app.js"></script>
</body>
</html>