<?php
session_start();
$title = 'Administration';
include('./config/db.php');

$q = $db->query('SELECT * FROM categorie');
$categories = $q->fetchAll();

extract($_POST);

if (isset($publier)) {

    if (!empty($nom) && !empty($categorie) && !empty($prix) && !empty($description)) {

        if (isset($_FILES['photo1']) && !empty($_FILES['photo1']['name'])) {
            $tailleMax = 2097152;
            $extensionValides = array('jpg', 'jpeg', 'gif', 'png');

            if ($_FILES['photo1']['size'] <= $tailleMax) {
                $extensionUpload1 = strtolower(substr(strrchr($_FILES['photo1']['name'], '.'), 1));

                if (in_array($extensionUpload1, $extensionValides)) {
                    $chemin1 = "produit/" . $prix . $categorie . $_FILES['photo1']['name'];
                    $resultat1 = move_uploaded_file($_FILES['photo1']['tmp_name'], $chemin1);
                    $name1 = $prix . $categorie . $_FILES['photo1']['name'];

                    if ($resultat1) {

                        $q = $db->prepare('INSERT INTO produit(nom, categorie, description, image, prix)
                                                    VALUES(:nom, :categorie, :description, :image, :prix)');
                        $q->execute([
                            'nom' => $nom,
                            'categorie' => $categorie,
                            'description' => $description,
                            'image' => $name1,
                            'prix' => $prix,
                        ]);

                        $success = 'le produit a été publier avec success';
                    } else {
                        $errors = 'Erreur durant l"importation de votre image';
                    }
                }
            } else {
                $errors = 'l\'image du produit est trop lourd maximum 1Mo !!!';
            }
        } else {
            $errors = 'choisissez l\'image de produit';
        }
    } else {
        $errors = 'veuillez saisir tous les cahmps!!!';
    }
}


require('./views/admin_profile.view.php');
require('./layout/_footer.php');
