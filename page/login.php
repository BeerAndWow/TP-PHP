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
        header("location:".$folder."index.php");
        

    }

       
}
include_once  $folder.'header.php';
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <h3>Login</h3>

            <form method="POST">

                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email_log" placeholder="Email" value="<?php echo $email_log; ?>">
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "email_log")."</span>"; ?>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password_log" placeholder="Mot de passe">
                    <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "password_log")."</span>"; ?>
                </div>

                <button type="submit" class="btn btn-default">Valider</button>

            </form>
        </div>
    </div>
<?php
include_once $folder.'footer.php';