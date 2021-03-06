<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $folder;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $folder;?>css/style.css">
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
            <?php 
            if (!isset($_SESSION["user"])) {
            echo "<li><a href=".$folder."page/register.php>Register</a></li>";
            echo "<li><a href=".$folder."page/login.php>Login</a></li>";

            }
            else {
                if ($_SESSION["user"]->role == 1) {
                echo "<li><a href=".$folder."page/admin.php>Admin panel</a></li>";
                }
            echo "<li><a href='#'>".$_SESSION["user"]->lastname." ".$_SESSION["user"]->firstname."</a></li>";
            echo "<li><a href=".$folder."page/logout.php".">Logout</a></li>";
                } ?>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->