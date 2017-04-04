<?php
session_start();

if (($_SESSION['user'] == null || $_SESSION['user']->role == 0)) {
    header('location: ../index.php');
}
$folder = './../../TP-PHP/';
include_once $folder.'config.php';
include_once $folder.'function/autoload.php';
include_once $folder.'header.php';
?>

<div class="col-md-4 col-md-offset-4">
<h1>Nouvel article</h1>
<form method="POST">
    <div class="form-group">
        <label for="name" class="control-label" >Article name</label>
        <input type="text" class="form-control" id="articleName" name="name" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="price" class="control-label" >article price</label>
        <input type="text" class="form-control" id="articlePrice" name="price" placeholder="Price">
    </div>

    <div class="form-group">
        <label for="stock" class="control-label">stock</label>
        <input type="text" class="form-control" id="quantity" name="stock" placeholder="stock">
    </div>

    <div class="form-group">
        <label for="content" class="control-label">content</label>
        <textarea class="form-control" name="content" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label ><input type="radio" name="category" value="0"> Whisky</label>
        <label ><input type="radio" name="category" value="1"> Cigars</label>
    </div>
    <div class="form-group">
        <label for="picture" class="control-label">picture URL</label>
        <input type="text" class="form-control" id="quantity" name="picture" placeholder="picture">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

</form>
</div>
<?php
include_once $folder.'footer.php';