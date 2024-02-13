<?php
include "../inc/fonction.php";
$login = $_POST['user'];
$pw = $_POST['mdp'];
if (verificationUserExiste($login)) {
    if (isAdmin($login)) {
        if (verificationLogin($login, $pw)) {
            $user = getUser($login, $pw)[0];
            session_start();
            $_SESSION["user"] = $user;
            header('Location:parcelle.php');
        } else {
            $erreur = "Mot de passe errone";
            header('Location:./admin.php?error=Mot de passe errone');
        }
    } else {
        $erreur = "Connexion reservee aux administrateurs";
        header('Location:./admin.php?error=Connexion reservee aux administrateurs');
    }
} else {
    $erreur = "L admin n existe pas";
    header('Location:./admin.php?error=L admin n existe pas');
}
