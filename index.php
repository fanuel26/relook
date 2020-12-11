<?php
include('./config/databases.php');

$q = $db->query('SELECT * FROM produit ORDER BY nom_prod');

$produit = $q->fetchAll();

require('./views/index.view.php');
require('./layout/_footer.php');
?>
