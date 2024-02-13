<?php 
include "../inc/fonction.php";

$nom=$_POST['nom'];
$genre=$_POST['genre'];
$dtn=$_POST['dtn'];

$message = insertCueilleur($nom, $genre,$dtn);

header("Location: cueilleur.php?message=" . urlencode($message));
?>
