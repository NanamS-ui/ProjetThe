<?php
include "../inc/fonction.php";
$login=$_POST['user'];
$pw=$_POST['mdp'];
if (verificationUserExiste($login)) {
    if (verificationLogin($login,$pw)) {
        $user=getUser($login,$pw)[0];
        session_start();
        $_SESSION["user"]=$user;
        header('Location:parcelle.html');

    }
    else{
        $erreur="Mot de passe errone";
        header('Location:../index.php?error=Mot de passe errone');
    }
}
else{
    $erreur="L user n existe pas";
    header('Location:../index.php?error=L user n existe pas');
}
?>