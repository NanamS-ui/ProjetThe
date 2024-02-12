<?php 
include "../inc/fonction.php";

$id=$_GET["id"];

$message = deletedepense($id);

header("Location: parcelle.php?message=" . urlencode($message));
?>
