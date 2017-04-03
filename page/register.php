  <?php


 $folder = './../../TP-PHP/';
 include_once $folder.'config.php';
 include_once $folder.'function/autoload.php';

$firstname  = null;
$lastname   = null;
$email      = null;
$password   = null;
$genre      = null;
$birthday   = null;

// l'envois du formulaire via la methode POST
if (!empty($_POST)) {

    // Récupération des données de $_POST
    $firstname  = formatString($_POST['firstname']);
    $lastname   = formatString($_POST['lastname']);
    $email      = formatString($_POST['email']);
    $password   = formatString($_POST['password']);
    $genre      = isset($_POST['genre']) ? $_POST['genre'] : null;
    $birthday   = implode("-",array_reverse($_POST['birthday']));

    // Cryptage du mot de passe


    // Création du tableau d'erreur
    $error = [];

    // Les Noms est prénoms ne doivent etre QUE des caractère ALPHABETIQUE

    // Formatage du nom (tout en majuscule)
    // Le nom doit avoir au moins 1 caractere
    if (strlen($lastname) < 1) {
        array_push($error, array(
            "field" => "lastname",
            "message" => "Votre NOM doit contenir au moins un caractère."
        ));
    }
    else if (!preg_match("/[a-z]/i",$lastname)) {
        array_push($error, array(
            "field" => "lastname",
            "message" => "Votre NOM doit contenir des caractères alphabétique."
        ));
    }

    $lastname = mb_strtoupper($lastname);


    // Formatage du prénom (Premier caractere en MAJ, le reste en minuscule)
    // Le prénom doit avoir au moins 2 caractères
    // (Bonus) les prénoms composé, séparé ou non par des tiret
    if (strlen($firstname) < 2) {
        array_push($error, array(
            "field" => "firstname",
            "message" => "Votre Prénom doit contenir au moins 2 un caractère."
        ));
    }
    else if (!preg_match("/[a-z]/i",$firstname)) {
        array_push($error, array(
            "field" => "firstname",
            "message" => "Votre Prénom doit contenir des caractères alphabétique."
        ));
    }

    $firstname = mb_strtoupper(mb_substr($firstname, 0, 1))
                .mb_substr(mb_strtolower($firstname), 1);


    // Controle de l'adresse email
    // if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
    // if (!strpos($email, "@"))
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        array_push($error, array(
            "field" => "email",
            "message" => "Vous devez saisir une adresse email valide (user@domain.com)."
        ));
    }

    // Controle du mot de passe
    // - Minumum 8 caractères
    // - Au moins 1 caractere NUMERIQUE
    // - Au moins un caractère ALPHABETIQUE en majuscule
    // - Au moins 1 caractère spécial #!@

    if (strlen($password) < 8)
    {
        array_push($error, array(
            "field" => "password",
            "message" => "Le mot de passe doit contenir au moins 8 caractères."
        ));
    }
    // "/expression/flag"
    // (?=.*\d) Au moins 1 digit dans la chaine
    // (?=.*[a-zA-Z])   Au moins 1 caractère alpha dans la chaine
    // (?=.*["@!])  Au moins 1 caractères spéciale
    // {8,}     Au moins 8 caractères
    else if (!preg_match("/(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9!]{8,}/", $password))
    {
        array_push($error, array(
            "field" => "password",
            "message" => "Le mot de passe doit contenir au moins 1 caractère numérique (0-1)."
        ));
    }


    // Controle du genre
    if (!isset($_POST['genre'])) {
        array_push($error, array(
            "field" => "genre",
            "message" => "Vous devez définir le genre."
        ));
    }


    // Controle date de naissance
    if (strlen($birthday) < 8) {
        array_push($error, array(
            "field" => "birthday",
            "message" => "La date de naissance n'est pas valide."
        ));
    }


    // Enregistrement de l'utilisateur dans la base de données
    if (empty($error)) {
        $user_id = setUser($firstname, $lastname, $email, $password, $genre, $birthday);
        // $user_id = 0;

        // On log l'utilisateur et on le redirige vers sa page profil
        if ($user_id > 0) {
            setFlashbag("Enregistrement réussi : ".$firstname." ".$lastname." !");

        }

        // Si l'enregistrement à échoué on affiche un message d'erreur
        else {
             echo "<span class=\"text-danger\">"."L'enregistrement à échoué"."</span>";
        }
    }
}
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
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <h3>Inscription</h3>

            <form method="POST">

                <div class="form-group">
                    <label for="firstname" class="control-label" >Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" value="<?php echo $firstname; ?>">
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "firstname")."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="lastname" class="control-label" >Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom" value="<?php echo $lastname; ?>">
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "lastname")."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "email")."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "password")."</span>"; ?>
                </div>

                <div class="form-group">
                    <label ><input type="radio" name="genre" value="M"> Homme</label>
                    <label ><input type="radio" name="genre" value="F"> Femme</label>
                    <?php if (isset($error)) echo "<br><span class=\"text-danger\">".printError($error, "genre")."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="birthday_day" class="control-label">Date de naissance</label>

                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id="birthday_day" name="birthday['day']">
                                <option value=""></option>
                                <?php for ($i=1; $i<=31; $i++) : ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <select class="form-control" id="birthday_month" name="birthday['month']">
                                <option value=""></option>
                                <?php for ($i=1; $i<=12; $i++) : ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <select class="form-control" id="birthday_year" name="birthday['year']">
                                <option value=""></option>
                                <?php for ($i=date("Y"); $i>date("Y")-100; $i--) : ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "birthday")."</span>"; ?>

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