<?php
session_start();
$title = 'Recherche';
include('./config/db.php');


$q = $db->prepare('SELECT * FROM produit WHERE nom LIKE :nom');
$q->execute([
    'nom' => '%'.$_GET['name'].'%'
]); 

$produits = $q->fetchAll();;

require('./views/search.view.php');
require('./layout/_footer.php');

?>
