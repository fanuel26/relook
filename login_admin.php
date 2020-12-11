<?php
session_start();
$title = 'Inscription Client';
include('config/db.php');

extract($_POST);

if (isset($connexion)) {
    if (!empty($username) && !empty($password)) {
        $q = $db->prepare('SELECT * FROM user_admin
                            WHERE username = :username
                            AND password = :password');
        $q->execute([
            'username' => $username,
            'password' => $password
        ]);

        $compte = $q->rowCount();

        if ($compte) {
            $user = $q->fetch(PDO::FETCH_OBJ);

            $_SESSION['id'] = $user->id;

            header('Location: admin_profile.php?id=' . $user->id);
        } else {
            $error = 'la combinaison nom d\'utilisateur et mot de passe incorrecte !!!';
        }
    } else {
        $error = 'Veuillez remplire tous les champs !!!';
    }
}

require('views/login_admin.view.php');
include('layout/_footer.php');
