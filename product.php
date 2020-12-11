<?php
session_start();
$title = 'Produit';
include('./config/db.php');

$id = $_GET['id_prod'];

$q = $db->prepare('SELECT * FROM produit where id = :id');
$q->execute([
    'id' => $id
]);

$produit = $q->fetch(PDO::FETCH_OBJ);


$q = $db->prepare('SELECT * FROM produit where categorie = :id LIMIT 3');
$q->execute([
    'id' => $produit->categorie
]);

$produits = $q->fetchAll();


$q = $db->prepare('SELECT nom FROM categorie where id = :id');
$q->execute([
    'id' => $produit->categorie
]);

$categorie = $q->fetch(PDO::FETCH_OBJ);


$p = $db->query('SELECT * FROM produit ORDER BY RAND() LIMIT 1');
$produits_rd1 = $p->fetchAll();

$p = $db->query('SELECT * FROM produit ORDER BY RAND() LIMIT 6');
$produits_rd = $p->fetchAll();



extract($_POST);

if (isset($commander)) {
    if (!empty($qte)) {
        $link = "Location: https://wa.me/22892411760?text=Salut je veux payer '".$produit->nom.";' de catégorie : '".$categorie->nom."'; Quantité : ".$qte." . Merci.";
        header($link);
    }else {
        $error = 'veuillez definir une quantité';
    }
}

require('./views/product.view.php');
require('./layout/_footer.php');
?>
