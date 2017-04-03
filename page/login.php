<?php


 $folder = './../../TP-PHP/';
 include_once $folder.'config.php';
 include_once $folder.'function/autoload.php';

$email_log      = null;
$password_log   = null;
$firstname   = null;
$lastname   = null;

// l'envois du formulaire via la methode POST
if (!empty($_POST)) {

    // Récupération des données de $_POST
    $email_log      = formatString($_POST['email_log']);
    $password_log   = formatString($_POST['password_log']);
    $login = getUserByEmail($email_log);

    // Cryptage du mot de passe


    // Création du tableau d'erreur
    $error = [];


    // Controle de l'adresse email

    if (!filter_var($email_log, FILTER_VALIDATE_EMAIL))
    {
        array_push($error, array(
            "field" => "email_log",
            "message" => "Vous devez saisir une adresse email valide (user@domain.com)."
        ));
    }
    elseif (getUserByEmail($email_log) === false)
    {
        array_push($error, array(
            "field" => "email_log",
            "message" => "Cet email n'est pas enregistrer sur notre site."
        ));
    }
    elseif ($password_log != $login->password)
    {
        array_push($error, array(
            "field" => "password_log",
            "message" => "Votre mot de passe n'est pas valide."
        ));
    }


    // Enregistrement de l'utilisateur dans la base de données
    if (empty($error)) {
        $firstname   = $login->firstname;
        $lastname   = $login->lastname;
        setFlashbag("Vous ête connecté ".$firstname." ".$lastname." !");
        $_SESSION["user"] = $login;
        var_dump($_SESSION["user"]);



    }

       
}
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
            <li><a href="<?php echo $folder; ?>page/login.php">Connexion</a></li>
            </li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <h3>Connexion</h3>

            <form method="POST">

                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email_log" placeholder="Email" value="<?php echo $email_log; ?>">
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "email_log")."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password_log" placeholder="Mot de passe">
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "password_log")."</span>"; ?>
                </div>

                <button type="submit" class="btn btn-default">Valider</button>

            </form>
        </div>
    </div>
    <script src="<?php echo $folder; ?>js/jquery.min.js"></script>
    <script src="<?php echo $folder; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $folder; ?>js/app.js"></script>
</body>
</html>