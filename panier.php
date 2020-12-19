<?php
session_start();
$title = 'Panier';
include('./config/db.php');


extract($_POST);


if (isset($delet)) {
    foreach($_SESSION['panier'] as $panier) {
        if ($panier == $idid) {
            var_dump($panier);

            $key = array_search($panier, $_SESSION['panier']);
            
            unset($_SESSION['panier'][$key]);
            
        }
    }
}


require('./views/panier.view.php');
require('./layout/_footer.php');

?>
