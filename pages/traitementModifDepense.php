<?php
include '../inc/fonction.php';
$id=$_POST["id"];
$dtd=$_POST['dtd'];
$descri=$_POST["descri"];
$val=$_POST["val"];
$message = updatedepense($id,$dtd,$descri,$val);
header("Location: variete.php?message=" . urlencode($message));
?>