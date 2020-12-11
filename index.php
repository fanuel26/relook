<?php
session_start();
$title = 'Accueil';
include('./config/db.php');

$q = $db->query('SELECT * FROM produit ORDER BY RAND() desc LIMIT 8');
$produits = $q->fetchAll();

$p = $db->query('SELECT * FROM produit ORDER BY RAND() LIMIT 1');
$produits_rd1 = $p->fetchAll();

$p = $db->query('SELECT * FROM produit ORDER BY RAND() LIMIT 6');
$produits_rd = $p->fetchAll();


require('./views/index.view.php');
require('./layout/_footer.php');
?>
