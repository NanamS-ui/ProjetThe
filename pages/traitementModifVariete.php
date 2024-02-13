<?php
include '../inc/fonction.php';
$id=$_POST["id"];
$nom=$_POST['nom'];
$occupation=$_POST["occupation"];
$rendement=$_POST["rendement"];
$message = updateVarieteDeThe($id,$nom,$occupation,$rendement);
header("Location: variete.php?message=" . urlencode($message));
?>