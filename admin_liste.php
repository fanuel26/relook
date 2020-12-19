<?php
session_start();
$title = 'Liste des produit';
include('./config/db.php');

$q = $db->query('SELECT * FROM produit ORDER BY id desc');
$produits = $q->fetchAll();


extract($_POST);

if (isset($supprimer)) {
    if (!empty($id_s)) {
        $q = $db->prepare('DELETE FROM produit where id = :id');
        $q->execute([
            'id' => $id_s
        ]);

        header('Location: admin_liste.php');
    } else {

    }
}

if (isset($edit)) {
    if (!empty($nom) && !empty($prix) && !empty($description)) {
        $q = $db->prepare('UPDATE produit SET nom = :nom, prix = :prix, description = :description  WHERE id = :id');
        $q->execute([
            'nom' => $nom,
            'prix' => $prix,
            'description' => $description,
            'id' => $id
        ]);

        header('Location: admin_liste.php');
    }
}

require('./views/admin_liste.view.php');
require('./layout/_footer.php');
