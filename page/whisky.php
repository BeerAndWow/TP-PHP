<?php
$folder = './../../TP-PHP/';
include_once $folder.'config.php';
include_once $folder.'function/autoload.php';
include_once $folder.'header.php';
?>

    <br>
    <br>
    <div class="container">
        <h2>Our whisky's</h2>
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
            foreach (getArticlesCategory(0) as $id => $article) {
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
<?php
include_once $folder.'footer.php';