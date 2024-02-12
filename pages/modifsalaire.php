<?php
include "../inc/fonction.php";
$salaire=$_POST['salaire'];
$message = updateSalaire($salaire);

header("Location: salaire.php?message=" . urlencode($message));
?>