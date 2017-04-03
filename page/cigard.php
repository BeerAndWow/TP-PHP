<?php
$folder = './../../TP-PHP/';
include_once $folder.'config.php';
include_once $folder.'function/autoload.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
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
        <a class="navbar-brand" href="<?php echo $folder; ?>index.php">Whiskey Me Up</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo $folder; ?>page/whisky.php">Whisky</a></li>
            <li><a href="<?php echo $folder; ?>page/cigard.php">Cigars</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $folder; ?>page/register.php">Register</a></li>
            <li><a href="#">Login</a></li>
            </li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <br>
    <br>
    <div class="container">
        <h2>Our cigars</h2>
    </div>
     <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <img src="../img/separator.png" class="img-responsive" alt="separator">
            <br>
        </div>
    </div>
    </div>
<div class="container">
        <?php
            foreach (getArticlesCategory(1) as $id => $article) {
                if($id == 0){
                    echo "<div class='row'>";
                    echo "<div class='col-md-4'>";
                    echo "<a href=".$folder."page/product.php?article=".$article->id."&name=".$article->name."><img class='img-responsive thumbnail' src=".$folder.$article->picture." ></a>";
                    echo "<h3>".$article->name." "."<strong>".$article->price." €</strong>"."</h3>";
                    echo "</div>";
                }
                elseif ($id == 3 || $id == 6 || $id == 9 || $id == 12) {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-4'>";
                    echo "<a href=".$folder."page/product.php?article=".$article->id."&name=".$article->name."><img class='img-responsive thumbnail' src=".$folder.$article->picture." ></a>";
                    echo "<h3>".$article->name." "."<strong>".$article->price." €</strong>"."</h3>";
                    echo "</div>";
                }
                else{
                    echo "<div class='col-md-4'>";
                    echo "<a href=".$folder."page/product.php?article=".$article->id."&name=".$article->name."><img class='img-responsive thumbnail' src=".$folder.$article->picture." ></a>";
                    echo "<h3>".$article->name." "."<strong>".$article->price." €</strong>"."</h3>";
                    echo "</div>";
                }
            }
        ?>
    </div>

    </div>
     <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <img src="../img/separator.png" class="img-responsive" alt="separator">
            <br>
        </div>
    </div>
    </div>
    <script src="<?php echo $folder; ?>js/jquery.min.js"></script>
    <script src="<?php echo $folder; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $folder; ?>js/app.js"></script>
</body>
</html>