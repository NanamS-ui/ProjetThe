<?php 
include "../inc/fonction.php";

$id=$_GET["id"];

$message = deleteParcelle($id);

header("Location: parcelle.php?message=" . urlencode($message));
?>
