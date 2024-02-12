<?php 
include "../inc/fonction.php";

$id=$_GET["id"];

$message = deleteCueilleur($id);

header("Location: cueilleur.php?message=" . urlencode($message));
?>
