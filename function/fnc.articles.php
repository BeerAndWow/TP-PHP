<?php

/**
 * Récupération de tout les articles avec un ORDER en parametre
 */
function getArticles() {

   global $bdd;

   $query = $bdd->prepare("SELECT id, name, picture, price FROM articles ");

   $query->execute();

   return $query->fetchAll(PDO::FETCH_OBJ);
}

/**
 * Récupération de tout les articles celon la category
 */
function getArticlesCategory($category) {

    global $bdd;

    $query = $bdd->prepare("SELECT id, name, content, picture, price, stock FROM articles WHERE id_category=:idCategory");

    $query->bindValue(":idCategory", $category, PDO::PARAM_INT);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}

/**
 * Ajoute un article en BDD et retourne son ID
 */
function setArticle($category, $name, $content, $picture, $price, $stock) {

    global $bdd;


    $query = $bdd->prepare("INSERT INTO articles (`id_category`, `name`, `content`, `picture`, `price`, `stock`)
                                          VALUES (:category,     :name,  :content,  :picture,  :price,  :stock)");


    $query->bindParam(':category', $category, PDO::PARAM_INT);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    $query->bindParam(':stock', $stock, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    $query->bindParam(':picture', $picture, PDO::PARAM_STR);

    $query->execute();

    return $bdd->lastInsertId();
}

/**
 * recupère et retourne un article grace à son ID
 */
function getArticle($id) {

    global $bdd;


    $query = $bdd->prepare("SELECT * FROM articles WHERE id=:idArticle");

    $query->bindValue(":idArticle", $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_OBJ);
}

/**
* Modifie un article
*/
function updateArticle($id, $category, $name, $content, $picture, $stock, $price) {

    global $bdd;


    $query = $bdd->prepare("UPDATE articles SET id_category=:category, name=:name, content=:content, price=:price, stock=:stock, picture=:picture WHERE id=:idArticle");

    $query->bindParam(':category', $category, PDO::PARAM_INT);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    $query->bindParam(':stock', $stock, PDO::PARAM_STR);
    $query->bindParam(':picture', $picture, PDO::PARAM_STR);
    $query->bindParam(":idArticle", $id, PDO::PARAM_INT);

    $query->execute();

    return $query->rowCount() > 0 ? true : false;
}

/**
 * Supprime un article
 */
function deleteArticle($id) {

    global $bdd;

    $query = $bdd->prepare("DELETE FROM articles WHERE id=:idArticle");

    $query->bindParam(":idArticle", $id, PDO::PARAM_INT);

    $query->execute();

    return $query->rowCount() > 0 ? true : false;
}