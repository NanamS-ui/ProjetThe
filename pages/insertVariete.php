<?php 
include "../inc/fonction.php";

$nom=$_POST['nom'];
$occupation=$_POST['occupation'];
$rendement=$_POST['rendement'];

$message = insereVarieteDetThe($nom, $occupation,$rendement);

header("Location: variete.php?message=" . urlencode($message));
?>
