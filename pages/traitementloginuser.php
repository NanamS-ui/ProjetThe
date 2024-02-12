<?php
include "../inc/fonction.php";
$login=$_POST['login'];
$pw=$_POST['password'];
if (verificationUserExiste($login)) {
    if (verificationLogin($login,$pw)) {
        $user=getUser($login,$pw)[0];
        session_start();
        $_SESSION["user"]=$user;
    }
    else{
        $erreur="Mot de passe errone";
        header('Location:../index.php?error=$erreur');
    }
}
else{
    $erreur="L user n existe pas";
    header('Location:../index.php?error=$erreur');
}
?>