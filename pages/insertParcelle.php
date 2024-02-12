<?php 
include "../inc/fonction.php";

$surface = $_POST['surface'];
$variete = $_POST['variete'];

$message = insertParcelle($surface, $variete);

header("Location: parcelle.php?message=" . urlencode($message));
?>
