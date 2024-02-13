<?php
include '../inc/fonction.php';
$id=$_POST["id"];
$nom=$_POST['nom'];
$genre=$_POST["genre"];
$dtn=$_POST["dtn"];
$message = updateCueilleur($id,$nom,$genre,$dtn);
header("Location: variete.php?message=" . urlencode($message));
?>