<?php
$folder = './../../TP-PHP/';
include_once $folder.'config.php';
include_once $folder.'function/autoload.php';
include_once $folder.'header.php';

if (($_SESSION['user'] == null || $_SESSION['user']->role == 0)) {
    header('location: ../index.php');
}

$name       = null;
$content    = null;
$price      = null;
$picture    = null;
$category   = null;
$stock      = null;

// l'envois du formulaire via la methode POST
if (!empty($_POST)) {

    // Récupération des données de $_POST
    $name       = formatString($_POST['name']);
    $content    = formatString($_POST['content']);
    $price      = formatString($_POST['price']);
    $picture    = formatString($_POST['picture']);
    $category   = $_POST['category'];
    $stock      = formatString($_POST['stock']);

    // Cryptage du mot de passe


    // Création du tableau d'erreur
    $error = [];

    // Les Noms est prénoms ne doivent etre QUE des caractère ALPHABETIQUE

    // Formatage du nom (tout en majuscule)
    // Le nom doit avoir au moins 1 caractere
    if (strlen($name) < 1) {
        array_push($error, array(
            "field" => "name",
            "message" => "Votre champs est vide."
        ));
    }
     if (strlen($content) < 1) {
        array_push($error, array(
            "field" => "content",
            "message" => "Votre champs est vide."
        ));
    }
     if (strlen($price) < 1) {
        array_push($error, array(
            "field" => "price",
            "message" => "Votre champs est vide."
        ));
    }
     if (strlen($picture) < 1) {
        array_push($error, array(
            "field" => "picture",
            "message" => "Votre champs est vide."
        ));
    }
     if (strlen($category) < 1) {
        array_push($error, array(
            "field" => "category",
            "message" => "Votre champs est vide."
        ));
    }
     if (strlen($stock) < 1) {
        array_push($error, array(
            "field" => "stock",
            "message" => "Votre champs est vide."
        ));
    }


    // Enregistrement de l'utilisateur dans la base de données
    if (empty($error)) {
        $lastid = setArticle($category, $name, $content, $picture, $price, $stock);
        $_SESSION["article"] = getArticle($lastid);
        header("location : admin.php");

    }
}

?>
<div class="col-md-4 col-md-offset-4">

<?php if (!isset( $_SESSION["article"])): ?>

<h1>Nouvel article</h1>
<form method="POST">
    <div class="form-group">
        <label for="name" class="control-label" >Article name</label>
        <input type="text" class="form-control" id="articleName" name="name" placeholder="Name">
        <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "name")."</span>"; ?>
    </div>

    <div class="form-group">
        <label for="price" class="control-label" >article price</label>
        <input type="text" class="form-control" id="articlePrice" name="price" placeholder="Price">
        <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "price")."</span>"; ?>
    </div>

    <div class="form-group">
        <label for="stock" class="control-label">stock</label>
        <input type="text" class="form-control" id="quantity" name="stock" placeholder="stock">
        <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "stock")."</span>"; ?>
    </div>

    <div class="form-group">
        <label for="content" class="control-label">content</label>
        <textarea class="form-control" name="content" rows="10"></textarea>
        <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "content")."</span>"; ?>
    </div>
    <div class="form-group">
        <label ><input type="radio" name="category" value="0"> Whisky</label>
        <label ><input type="radio" name="category" value="1"> Cigars</label>
        <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "category")."</span>"; ?>
    </div>
    <div class="form-group">
        <label for="picture" class="control-label">picture URL</label>
        <input type="text" class="form-control" id="quantity" name="picture" placeholder="picture">
        <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "picture")."</span>"; ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

<?php else: ?>
    <div class="row">
        <ul>
            <li><?php  echo $_SESSION["article"]->name ?></li>
            <li><?php  echo $_SESSION["article"]->id_category ?></li>
            <li><?php  echo $_SESSION["article"]->content ?></li>
            <li><?php  echo $_SESSION["article"]->picture ?></li>
            <li><?php  echo $_SESSION["article"]->price ?></li>
            <li><?php  echo $_SESSION["article"]->stock ?></li>
        </ul>
    </div>
<?php endif ?>

</form>
</div>
<?php
include_once $folder.'footer.php';