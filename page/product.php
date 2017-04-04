<?php
$folder = './../../TP-PHP/';
include_once $folder.'config.php';
include_once $folder.'function/autoload.php';
$article = getArticle($_GET["article"]);
include_once $folder.'header.php';
?>

    <br>
    <br>
    <div class="container">
        <h2 class="col-md-3 col-md-offset-1"><strong><?php echo $article->name ?></strong></h2>
        <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <br>
            <img src="../img/separator.png" class="img-responsive" alt="separator">
            <br>
        </div>
    </div>
    </div>
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
            echo "<br>"."<h3>"."Pick one for only : "."<strong>".$article->price." €</strong>"."  "."<button class='btn btn-success'>Add to Cart</div></h3>";
            echo "</div>";

            
        ?>
    </div>
<?php
include_once $folder.'footer.php';