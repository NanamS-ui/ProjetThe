<?php 
include "../inc/fonction.php";

$dtd = $_POST['dtd'];
$depense= $_POST['depense'];
$val = $_POST['val'];

$message = insertdepense($dtd, $depense,$val);

header("Location: depense.php?message=" . urlencode($message));
?>
