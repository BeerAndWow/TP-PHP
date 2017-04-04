<?php
$folder = './../TP-PHP/';
include_once $folder.'config.php';
include_once $folder.'function/autoload.php';
include_once $folder.'header.php';
?>

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
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="img/slider/Slider1.jpg" alt="Chania">
        </div>

        <div class="item">
        <img src="img/slider/Slider2.jpg" alt="Chania">
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
    <h2>Our Bestsellers</h2>
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <img src="img/separator.png" class="img-responsive" alt="separator">
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
     <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <img src="img/separator.png" class="img-responsive" alt="separator">
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
<?php
include_once $folder.'footer.php';